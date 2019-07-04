/* 
Personal notes: 
SHOW DATABASES;
DROP DATABASE;
CREATE DATABASE db_name;
USE db_name;

GRANT ALL PRIVILEGES ON ICT_maatwerk_aanmelding.*klanten
TO 'jasper'@'localhost'
IDENTIFIED BY 'REAcollegeVpro';

SHOW GRANTS FOR 'jasper'@'localhost';

SHOW TABLES
DROP TABLES

CRUD

* CREATE
* READ
* UPDATE
* DELETE

*/
CREATE DATABASE ICT_maatwerk_aanmelding;
CREATE TABLE klanten (
  klant_id INT(11) NOT NULL AUTO_INCREMENT,
  naam VARCHAR(255) NOT NULL,
  achternaam VARCHAR(255) NOT NULL,
  geboortedatum DATE NOT NULL,
  straatnaam VARCHAR(255) NOT NULL,
  plaatsnaam varchar(255) NOT NULL,
  mobiele_telefoon INT NOT NULL,
  mail varchar(255) NOT NULL,
  aanmeldingsreden TEXT,
  bijzonderheden TEXT,
  PRIMARY KEY (klant_id),
);
CREATE TABLE roostertijden (
  rooster_ID INT NOT NULL AUTO_INCREMENT,
  klant_id INT(11),
  maandagochtend TINYINT(1),
  maandagmiddag TINYINT(1),
  dinsdagochtend TINYINT(1),
  dinsdagmiddag TINYINT(1),
  woensdagmorgen TINYINT(1),
  woensdagmiddag TINYINT(1),
  donderdagochtend TINYINT(1),
  donderdagmiddag TINYINT(1),
  vrijdagochtend TINYINT(1),
  vrijdagmiddag TINYINT(1),
  PRIMARY KEY (`rooster_ID`)
);

ALTER TABLE roostertijden
ADD INDEX fk_klant_id (klant_id)
REFERENCES klanten(klant_id)
ON DELETE
ON UPDATE;

INSERT INTO
  klanten (
    klant_id,
    naam,
    achternaam,
    geboortedatum,
    straatnaam,
    plaatsnaam,
    mobiele_telefoon,
    mail,
    aanmeldingsreden,
    bijzonderheden
  )
VALUES
  (
    0,
    'Jan',
    'van Hest',
    '1984/02/15',
    'Abeelstraat 27',
    '6562 GT Groesbeek',
    0642091421,
    'jan@vanhest.work',
    'Herintreden in arbeidsmarkt',
    'prettig gestoord'
  );
INSERT INTO
  klanten (
    naam,
    achternaam,
    geboortedatum,
    straatnaam,
    plaatsnaam,
    mobiele_telefoon,
    mail,
    aanmeldingsreden,
    bijzonderheden
  )
VALUES
  (
    'Kees',
    'de Boer',
    '1985/02/15',
    'Chopinstraat 47',
    '6562 GT Nijmegen',
    0642011223,
    'kees@deboer.nl',
    'Herintreden in arbeidsmarkt',
    'Saai in gesprek'
  );
INSERT INTO
  klanten (
    naam,
    achternaam,
    geboortedatum,
    straatnaam,
    plaatsnaam,
    mobiele_telefoon,
    mail,
    aanmeldingsreden,
    bijzonderheden
  )
VALUES
  (
    'Twan',
    'Janssen',
    '1977/02/15',
    'Mozartstraat 47',
    '6562 GT Amsterdam',
    06123457896,
    'twan@janssen.nl',
    'Stabiliseren Dag en Nachtritme',
    'verslavingsproblematiek'
  );
INSERT INTO
  klanten (
    naam,
    achternaam,
    geboortedatum,
    straatnaam,
    plaatsnaam,
    mobiele_telefoon,
    mail,
    aanmeldingsreden,
    bijzonderheden
  )
VALUES
  (
    'Piet',
    'Pieterssen',
    '1996/02/15',
    'Beethovenstraat 6164',
    '6562 GT Groningen',
    0612345186,
    'Piet@Pieterssen.nl',
    'boosten werknemersvaardigheden',
    'behoefte aan structuur'
  );