CREATE DATABASE IF NOT EXISTS mydb;

-- Create an user with the limited permission (the user is the same as the one using connecting to the MySQL server in the application)
-- CREATE USER IF NOT EXISTS 'simple_user'@'%' IDENTIFIED BY 'simple_password';
-- GRANT SELECT, INSERT, UPDATE, DELETE ON mydb.* TO 'simple_user'@'%';
-- FLUSH PRIVILEGES;

USE mydb;

DROP TABLE IF EXISTS book;

CREATE TABLE book (
  id SERIAL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO book (name) VALUES
  ('The Great Gatsby'),
  ('To Kill a Mockingbird'),
  ('1984'),
  ('Pride and Prejudice'),
  ('The Catcher in the Rye');