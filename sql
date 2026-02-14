CREATE DATABASE valentine_db;

USE valentine_db;

CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    answer VARCHAR(100) NOT NULL,
    comments TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
