CREATE DATABASE b_app;
use b_app;

CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  content TEXT,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL
);

INSERT INTO posts (title, content, created) VALUES ('初めての投稿', 'これは記事の本文です。', NOW());
INSERT INTO posts (title, content, created) VALUES ('2回目のの投稿', '本文のテスト', NOW());
INSERT INTO posts (title, content, created) VALUES ('3回目の投稿', '本文が続く', NOW());
