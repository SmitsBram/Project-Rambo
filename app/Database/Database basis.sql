drop database if exists rocambolesque;
create database rocambolesque;
use rocambolesque;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    number VARCHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Menu (
    menu_id INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(100) NOT NULL
);

CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL
);

CREATE TABLE Menu_Categories (
    menu_id INT,
    category_id INT,
    PRIMARY KEY (menu_id, category_id),
    FOREIGN KEY (menu_id) REFERENCES Menu(menu_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

CREATE TABLE Gerechten (
    gerecht_id INT AUTO_INCREMENT PRIMARY KEY,
    gerecht_name VARCHAR(100) NOT NULL,
    gerecht_beschNL VARCHAR(100) NOT NULL,
    gerecht_beschEN VARCHAR(100) NOT NULL,
    gerecht_prijs decimal(5,2) NOT NULL,
    menu_id INT NOT NULL
);

CREATE TABLE Categorieen_Gerechten (
    category_id INT,
    gerecht_id INT,
    PRIMARY KEY (category_id, gerecht_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id),
    FOREIGN KEY (gerecht_id) REFERENCES Gerechten(gerecht_id)
);

CREATE TABLE Gebruikersinfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    voornaam VARCHAR(50),
    achternaam VARCHAR(50),
    aanmaakdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO Gerechten (gerecht_name, gerecht_beschNL, gerecht_beschEN, gerecht_prijs, menu_id) VALUES
('Red Dragon Maki', 'King crab en pittige tonijn', 'King crab and spicy tuna', 24.99, 1),
('Unagi Maki', 'Paling, komkommer en avocado', 'Eel, cucumber and avocado', 8.99, 1);
('Carpaccio Maki', 'Dungesneden entrecôte en truffelsalsa', 'Thin sliced sirloin and truffle salsa', 5.99, 1)
('Wagyu Maki', 'Geflambeerde wagyu beef A5', 'Flambéed wagyu beef A5', 5.99, 1)
('Alcoholvrij |', 'HopHout Thee | Betuwswijndomein | Erichem', '&nbsp', 8.50, 1)
('Mousserend |', 'De Goede & de Stoute Vuurzee Cuvée Prestige | Champagne bier - Pinot Noir | 2021
Domein Heenwerf Cuvée Alliance | Chardonnay | Brabant  
Champagne Alexandre Penet 1er Cru Extra Brut | Chardonnay - Pinot Noir - Meunier 
Champagne Alexandre Penet Grand Cru Blanc de Noirs Brut Nature | Chardonnay', '&nbsp', 13.00, 1)
('Rood |', 'Sang de Stokhem Chateau Gilbert | Pinot Noir | Limburg | 2014 
R. Lopez de Heredia Viña Tondonia - Viña Cubillo | Tempranillo | Rioja | 2015', '&nbsp', 18.50, 1)
('Wit |', 'Markus Molitor | Riesling | Mosel | 2020 
Bodegas Forjas del Salnés Leirana | Albariño | Rías Baixas | 2021 
Domaine du Mont Verrier Bourgogne Blanc | Chardonnay | Bourgogne | 2019 ', '&nbsp', 15.00, 1);



INSERT INTO Menu ( menu_id, menu_name) VALUES
(1,'zomer'),
(2,'winter');


INSERT INTO Menu_Categories (menu_id, category_id) VALUES
(1,1),
(1,2),
(2,2);

INSERT INTO Categorieen_Gerechten (category_id, gerecht_id) VALUES
(1,1),
(1,2),
(2,3),
(2,4);