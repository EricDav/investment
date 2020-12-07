CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    email VARCHAR(100),
    email_verified boolean,
    password VARCHAR(225) NOT NULL,
    role int NOT NULL,
    first_name VARCHAR(225),
    last_name VARCHAR(225),
    phone_number VARCHAR(100),
    sex VARCHAR(2),
    date_created DATETIME NOT NULL,
    code_token VARCHAR(9),
    code_token_time DATETIME
    password_count TINYINT DEFAULT 0,
    token_count TINYINT DEFAULT 0,
    PRIMARY KEY(id)
) ENGINE=INNODB;