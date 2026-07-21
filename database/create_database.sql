CREATE DATABASE studentdb;

USE studentdb;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO students(name,email)
VALUES
('John Doe','john@example.com'),
('Alice','alice@example.com');
