CREATE DATABASE productsdb;
USE productsdb;
CREATE TABLE users
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);
CREATE TABLE products
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) UNIQUE,
    code INT UNIQUE,
    price FLOAT,
    preview_text TEXT(30),
    detail_text TEXT,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id)  REFERENCES users(id) ON DELETE CASCADE
);

