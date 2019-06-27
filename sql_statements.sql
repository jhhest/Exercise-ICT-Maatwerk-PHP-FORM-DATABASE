CREATE TABLE klanten (
  klant_id INT NOT NULL AUTO_INCREMENT,
  voornaam VARCHAR(255) NOT NULL,
  achternaam VARCHAR(255) NOT NULL,
  geboortedatum DATE NOT NULL,
  locaties VARCHAR(255) NOT NULL,
  opmerkingen TEXT(255) NOT NULL,
  rooster TEXT(255) NOT NULL,
  PRIMARY KEY (klant_id)
);
CREATE TABLE locatie (
  locatie_id VARCHAR(255) NOT NULL AUTO_INCREMENT,
  adres VARCHAR(255) NOT NULL,
  Postcode varchar(255) NOT NULL,
  woonplaats VARCHAR(255) NOT NULL,
  woonplaats VARCHAR(255) NOT NULL,
  PRIMARY KEY (locatie_id)
);
CREATE TABLE verblijf_woonvorm (
  soort_verblijf VARCHAR(255) NOT NULL UNIQUE,
  PRIMARY KEY (soort_verblijf)
);
CREATE TABLE opmerkingen (
  Opmerkingen_id BINARY NOT NULL AUTO_INCREMENT,
  Opmerking INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (Opmerkingen_id)
);
CREATE TABLE Roostertijden (
  rooster_ID INT NOT NULL AUTO_INCREMENT,
  dagdelen INT NOT NULL,
  PRIMARY KEY (rooster_ID)
);
CREATE TABLE dagdelen (
  aanwezigheid_id BINARY(255) NOT NULL AUTO_INCREMENT,
  Maandagochtend BINARY(255) NOT NULL,
  Maandagmiddag BINARY(255) NOT NULL,
  maandagvrij BINARY(255) NOT NULL,
  dinsdagochtend BINARY(255) NOT NULL,
  dinsdagmiddag BINARY(255) NOT NULL,
  dinsdagvrij BINARY(255) NOT NULL,
  woensdagochtend BINARY(255) NOT NULL,
  woensdagmiddag BINARY(255) NOT NULL,
  woensdagvrij BINARY(255) NOT NULL,
  donderdagochtend BINARY(255) NOT NULL,
  donderdagmiddag BINARY(255) NOT NULL,
  donderdagvrij BINARY(255) NOT NULL,
  vrijdagochtend BINARY(255) NOT NULL,
  vrijdagmiddag BINARY(255) NOT NULL,
  vrijdagvrij BINARY(255) NOT NULL,
  PRIMARY KEY (aanwezigheid_id)
);
ALTER TABLE
  klanten
ADD
  CONSTRAINT klanten_fk0 FOREIGN KEY (locaties) REFERENCES locatie(locatie_id);
ALTER TABLE
  klanten
ADD
  CONSTRAINT klanten_fk1 FOREIGN KEY (opmerkingen) REFERENCES opmerkingen(Opmerkingen_id);
ALTER TABLE
  klanten
ADD
  CONSTRAINT klanten_fk2 FOREIGN KEY (rooster) REFERENCES Roostertijden(rooster_ID);
ALTER TABLE
  locatie
ADD
  CONSTRAINT locatie_fk0 FOREIGN KEY (woonplaats) REFERENCES verblijf_woonvorm(soort_verblijf);
ALTER TABLE
  Roostertijden
ADD
  CONSTRAINT Roostertijden_fk0 FOREIGN KEY (dagdelen) REFERENCES dagdelen(aanwezigheid_id);