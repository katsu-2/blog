CREATE DATABASE b_app;
use b_app;

CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  content TEXT,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL
);
