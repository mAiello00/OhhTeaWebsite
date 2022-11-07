SHOW TABLES;

CREATE TABLE IF NOT EXISTS products(
    productID INT NOT NULL AUTO_INCREMENT,
    productsName VARCHAR(127) NOT NULL,
    productType VARCHAR(15) NOT NULL,
    productImageSource VARCHAR(150),
    productPrice DECIMAL(4, 2) NOT NULL,
    productDescription VARCHAR(1023),
    caffineLevel INT,
    size CHAR(11),
    benefits JSON,
    teaCollection VARCHAR(15),
    teaFilter VARCHAR(15),
    PRIMARY KEY(productID)
);

SHOW TABLES;
SELECT * FROM products;