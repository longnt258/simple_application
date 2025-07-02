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