SHOW TABLES;
CREATE TABLE IF NOT EXISTS Users(
    userID int NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(63) NOT NULL,
    lastName VARCHAR(63) NOT NULL,
    email VARCHAR(155) NOT NULL,
    points int,
    membershipType VARCHAR(16),
    hearted int,
    tempOne VARCHAR(63),
    tempTwo VARCHAR(63),
    accountCreationDate DATE NOT NULL,
    birthdate DATE NOT NULL,
    PRIMARY KEY(userID)
);

SELECT * FROM Users;

-- INSERT INTO Users (firstName, lastName, email, accountCreationDate, birthdate) VALUES('Marco', 'Aiello', 'marcoaiello023@hotmail.com', curdate(), '2000-04-22');
-- INSERT INTO Users (firstName, lastName, email, accountCreationDate, birthdate) VALUES('Laura', 'Aiello', 'aiellolaura86@gmail.com', curdate(), '2002-03-29');

SELECT * FROM Users;