CREATE TABLE reservations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    time TIME NOT NULL,
    field VARCHAR(30) NOT NULL,
    players INT(3) NOT NULL
);

CREATE TABLE tournaments (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    teams INT(3) NOT NULL
);
