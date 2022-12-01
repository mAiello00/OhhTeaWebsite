SHOW TABLES;

CREATE TABLE IF NOT EXISTS reviews(
    productID INT NOT NULL,
    review JSON,
    FOREIGN KEY(productID) REFERENCES products(productID)
);

SHOW TABLES;
SELECT * FROM reviews;