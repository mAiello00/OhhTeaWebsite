SHOW TABLES;

CREATE TABLE IF NOT EXISTS products(
    productID INT NOT NULL AUTO_INCREMENT,
    productsName VARCHAR(127) NOT NULL,
    productType VARCHAR(15) NOT NULL,
    productImageSource VARCHAR(150),
    productPrice JSON NOT NULL,
    productDescription VARCHAR(1023),
    caffineLevel INT,
    size JSON,
    benefits JSON,
    teaCollection VARCHAR(15),
    teaFilter JSON,
    productPageImages JSON,
    ingredients VARCHAR(256),
    taste VARCHAR(512),
    bestToMakeAs VARCHAR(512),
    PRIMARY KEY(productID)
);

SHOW TABLES;
SELECT * FROM products;