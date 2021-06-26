CREATE DATABASE serverdb;

CREATE USER 'bember'@'localhost' IDENTIFIED BY 'bember42';
GRANT ALL PRIVILEGES ON serverdb.* TO 'bember'@'localhost';
FLUSH PRIVILEGES;
