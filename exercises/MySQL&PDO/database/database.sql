CREATE DATABASE IF NOT EXISTS a_cool_project;
USE a_cool_project;

CREATE TABLE IF NOT EXISTS people (
    cd_people INT AUTO_INCREMENT PRIMARY KEY,
    nm_people VARCHAR(255) NOT NULL,
    nm_email VARCHAR(255) UNIQUE NOT NULL,
    nm_query TEXT NOT NULL
);