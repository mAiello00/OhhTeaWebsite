CREATE TABLE IF NOT EXISTS transactions(
    transactionID int NOT NULL AUTO_INCREMENT,
    uID int NOT NULL,
    transactionAmount DECIMAL(13,2) NOT NULL,
    transactionDateTime DATETIME NOT NULL,
    userEmail VARCHAR(155) NOT NULL,
    FOREIGN KEY(uID) REFERENCES Users(userID),
    PRIMARY KEY(transactionID)
);

SHOW TABLES;

SELECT * FROM transactions;