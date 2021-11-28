CREATE DATABASE productsdb;
USE productsdb;
CREATE TABLE users
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) UNIQUE
);
INSERT users(name) 
VALUES
('Ivanov'),
('Petrov'),
('Sidorov');
CREATE TABLE products
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) UNIQUE,
    code INT UNIQUE,
    price FLOAT,
    preview_text TEXT(30),
    detail_text TEXT,
    user_id INT ,
    FOREIGN KEY (user_id)  REFERENCES users(id) ON DELETE CASCADE
);

