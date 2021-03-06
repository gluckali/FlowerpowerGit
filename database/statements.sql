CREATE DATABASE flowerpower;
-- use gebruikt de database van flowerpower
USE flowerpower;

CREATE TABLE medewerker(
    id INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(250) NOT NULL,
    voorvoegsels VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    gebruikersnaam VARCHAR(250) NOT NULL,
    wachtwoord VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE winkel(
    id INT NOT NULL AUTO_INCREMENT,
    winkelnaam VARCHAR(250) NOT NULL,
    winkeladres VARCHAR(250) NOT NULL,
    winkelpostcode VARCHAR(250) NOT NULL,
    vestigingsplaats VARCHAR(250) NOT NULL,
    telefoonnummer VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE artikel(
    id INT NOT NULL AUTO_INCREMENT,
    artikel VARCHAR(250) NOT NULL,
    prijs DECIMAL(5,2),
    PRIMARY KEY(id)
);

CREATE TABLE klant(
    id INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(250) NOT NULL,
    tussenvoegsel VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    adres VARCHAR(250) NOT NULL,
    postcode VARCHAR(250) NOT NULL,
    woonplaats VARCHAR(250) NOT NULL,
    geboortedatum DATE,
    gebruikersnaam VARCHAR(250) NOT NULL,
    wachtwoord VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE factuur(
    id INT NOT NULL AUTO_INCREMENT,
    factuurdatum DATE,
    klant_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(klant_id) REFERENCES klant(id)
);

CREATE TABLE bestelling(
    id INT NOT NULL AUTO_INCREMENT,
    aantal INT NOT NULL,
    afgehaald VARCHAR(250) NOT NULL,
    klant_id INT NOT NULL,
    medewerker_id INT NOT NULL,
    artikel_id INT NOT NULL,
    winkel_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(klant_id) REFERENCES klant(id),
    FOREIGN KEY(medewerker_id) REFERENCES medewerker(id),
    FOREIGN KEY(artikel_id) REFERENCES artikel(id),
    FOREIGN KEY(winkel_id) REFERENCES winkel(id)
);

-- in mijn datatype moet ik cosistent zijn en moet int/decimal/varchar
CREATE TABLE factuurregel(
    id INT NOT NULL AUTO_INCREMENT,
    aantal INT NOT NULL,
    prijs DECIMAL(5,2) NOT NULL,
    factuur_id INT NOT NULL,
    artikel_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(factuur_id) REFERENCES factuur(id),
    FOREIGN KEY(artikel_id) REFERENCES artikel(id)
);
