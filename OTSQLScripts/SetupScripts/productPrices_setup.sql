SHOW TABLES;

CREATE TABLE IF NOT EXISTS productPrices(
    pName CHAR(127) NOT NULL,
    pSize CHAR(11),
    pPrice SMALLMONEY,
    pID int NOT NULL,
    PRIMARY KEY(pId)
);

SHOW TABLES;
SELECT * FROM productPrices;