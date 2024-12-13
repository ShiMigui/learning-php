CREATE DATABASE IF NOT EXISTS a_cool_project;
USE a_cool_project;

CREATE TABLE IF NOT EXISTS people (
    cd_people INT AUTO_INCREMENT PRIMARY KEY,
    nm_people VARCHAR(255) NOT NULL,
    nm_email VARCHAR(255) UNIQUE NOT NULL,
    nm_query TEXT NOT NULL
);

DELIMITER $$

CREATE PROCEDURE insert_people(nm_people VARCHAR(255), nm_email VARCHAR(255))
BEGIN
    INSERT INTO people (nm_people, nm_email, nm_query) VALUES (nm_people, nm_email, CONCAT(nm_people, ' - ', nm_email));
END$$

DELIMITER ;

CALL insert_people("Miguel Nascimento dos Santos", "miguel.nasto@gmail.com");
CALL insert_people("Alice Johnson", "alice.johnson@example.com");
CALL insert_people("Bob Smith", "bob.smith@example.com");
CALL insert_people("Charlie Brown", "charlie.brown@example.com");
CALL insert_people("Diana Prince", "diana.prince@example.com");
CALL insert_people("Ethan Hunt", "ethan.hunt@example.com");
CALL insert_people("Fiona Gallagher", "fiona.g@example.com");
CALL insert_people("George Weasley", "george.weasley@example.com");
CALL insert_people("Hannah Abbott", "hannah.abbott@example.com");
CALL insert_people("Ian Malcolm", "ian.malcolm@example.com");
CALL insert_people("Julia Roberts", "julia.roberts@example.com");