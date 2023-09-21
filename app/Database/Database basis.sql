drop database if exists rocambolesque;
create database rocambolesque;
use rocambolesque;
drop table if exists Gebruikersinfo;

CREATE TABLE Gebruikersinfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    voornaam VARCHAR(50),
    achternaam VARCHAR(50),
    aanmaakdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
