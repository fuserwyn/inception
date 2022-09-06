CREATE DATABASE wordpress;
CREATE USER 'fuserwyn'@'%' IDENTIFIED BY 'sql_pass';
GRANT ALL PRIVILEGES ON wordpress.* TO 'fuserwyn'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root_pass';