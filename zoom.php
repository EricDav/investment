<?php
$jsonFile = __DIR__ . '/fixtures.json';

$newFixtures = json_decode(file_get_contents('https://bet-odds.herokuapp.com/zoom-fixtures'))->data;
$newScores = json_decode(file_get_contents('https://bet-odds.herokuapp.com/zoom-scores'))->data;

if (!$newFixtures || !$newScores) {
    exit(0);
}

$fixtureObj = json_decode(file_get_contents($jsonFile));
$isSame = false;

if (sizeof($fixtureObj) > 0) {
    $lastFixture = $fixtureObj[sizeof($fixtureObj) - 1];
    if ($lastFixture[0]->home == $newFixtures[0]->home and $lastFixture[0]->away == $newFixtures[0]->away) {
        $isSame = true;
    }
}

if (!$isSame) {
    array_push($fixtureObj, $newFixtures);
}

foreach($fixtureObj as $fixtures) {
    foreach($fixtures as $fixture) {
        if (property_exists($fixture, 'score')) {
            foreach($newScores as $score) {
                if ($score->home == $fixture->home and $score->away == $fixture->away) {
                    $fixture->score = $score->score;
                    $fixture->htScore = $score->score;
                }
            }
        }
    }
}




$home = '1';
$away = '2';
$homeWinDraw = '1X';
$draw = 'X';
$awayWinDraw = 'X2';
$anybody = '12';
$over2 = 'Over 2.5';
$under2 = 'Under 2.5';

try {
    $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
    ];

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=wiseinve_zoom', 'wiseinve_investment', 'Iloveodunayo123', $options);
} catch(Exception $e) {
   // var_dump($e->getMessage());
   mail('pythonboss123@gmail.com', 'Zoom Cron Job Report', 'Database connection error: ' . $e->getMessage());
   exit(0);
}

$id = $pdo->lastInsertId();
$key = 0;
for ($i = 0; $i < sizeof($fixtureObj); $i++) {
     $fixtures = $fixtureObj[$i];
    if (!property_exists($fixtures[0], 'score')) {
        continue;
    }

    foreach($fixtures as $fixture) {
        $sql = 'INSERT INTO fixtures (home, away, type) VALUES(' .  '"' . $fixture->home . '"' . ',' . '"' . $fixture->away . '"' . ',' . '1' . ')';

        $pdo->query($sql);
        $id = $pdo->lastInsertId();
        $odds = $fixture->odds;

        $sql = 'INSERT INTO odds (`1`, `2`, `X`, `1X`, `X2`, `12`, `Over 2.5`, `Under 2.5`, `fixtures_id`) VALUES (' . '"' . $odds->$home . '"' . ',' .
            '"' . $odds->$away . '"' . ',' .
            '"' . $odds->$draw . '"' . ',' .
            '"' . $odds->$homeWinDraw . '"' . ',' .
            '"' . $odds->$awayWinDraw . '"' . ',' .
            '"' . $odds->$awayWinDraw . '"' . ',' .
            '"' . $odds->$over2 . '"' . ',' .
            '"' . $odds->$under2 . '"' . ',' .
             $id .
        ')';

        $pdo->query($sql);
        $pdo->query('INSERT INTO results (fixtures_id, ht_score, ft_score) 
            VALUES(' . $id . ',' . '"' . $fixture->htScore . '"' . ','. '"' . $fixture->score . '"' . ')');
    }
    unset($fixtureObj[$key]);
    $key+=1;
}

file_put_contents($jsonFile, json_encode($fixtureObj));
mail('pythonboss123@gmail.com', 'Zoom Cron Job Report', 'Successfully Ran the job without any errors');
exit(1);
?>