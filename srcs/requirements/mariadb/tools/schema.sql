CREATE DATABASE wordpressdb;
CREATE USER 'fuserwyn'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON wordpressdb.* TO 'fuserwyn'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root123123';