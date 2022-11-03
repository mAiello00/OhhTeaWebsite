SHOW TABLES;

CREATE TABLE IF NOT EXISTS Orders(
    orderID int NOT NULL AUTO_INCREMENT,
    datePlaced DATE NOT NULL,
    firstName VARCHAR(63) NOT NULL,
    lastName VARCHAR(63) NOT NULL,
    email VARCHAR(155) NOT NULL,
    orderStatus VARCHAR (15),
);