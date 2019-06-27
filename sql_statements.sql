CREATE DATABASE ICT_maatwerk_form;

CREATE TABLE `klanten` (
	`klant_id` INT NOT NULL AUTO_INCREMENT,
	`voornaam` VARCHAR(255) NOT NULL,
	`achternaam` VARCHAR(255) NOT NULL,
	`geboortedatum` DATE NOT NULL,
	`adres` VARCHAR(255) NOT NULL,
	`postcode` varchar(255) NOT NULL,
	`plaats` varchar(255) NOT NULL,
	`opmerkingen` TEXT NOT NULL,
	`rooster` TEXT NOT NULL,
	`Mobiele_telefoon` INT NOT NULL,
	`Reden van aanmelding` TEXT NOT NULL,
	PRIMARY KEY (`klant_id`)
);

CREATE TABLE `Roostertijden` (
	`rooster_ID` INT NOT NULL AUTO_INCREMENT,
	`dagdelen` INT NOT NULL,
	PRIMARY KEY (`rooster_ID`)
);

CREATE TABLE `dagdelen` (
	`aanwezigheid_id` INT NOT NULL AUTO_INCREMENT,
	`Maandagochtend` BOOLEAN NOT NULL DEFAULT false,
	`Maandagmiddag` BOOLEAN NOT NULL DEFAULT false,
	`maandagvrij` BOOLEAN NOT NULL DEFAULT false,
	`dinsdagochtend` BOOLEAN NOT NULL DEFAULT false,
	`dinsdagmiddag` BOOLEAN NOT NULL DEFAULT false,
	`dinsdagvrij` BOOLEAN NOT NULL DEFAULT false,
	`woensdagochtend` BOOLEAN NOT NULL DEFAULT false,
	`woensdagmiddag` BOOLEAN NOT NULL DEFAULT false,
	`woensdagvrij` BOOLEAN NOT NULL DEFAULT false,
	`donderdagochtend` BOOLEAN NOT NULL DEFAULT false,
	`donderdagmiddag` BOOLEAN NOT NULL DEFAULT false,
	`donderdagvrij` BOOLEAN NOT NULL DEFAULT false,
	`vrijdagochtend` BOOLEAN NOT NULL DEFAULT false,
	`vrijdagmiddag` BOOLEAN NOT NULL DEFAULT false,
	`vrijdagvrij` BOOLEAN NOT NULL DEFAULT false,
	PRIMARY KEY (`aanwezigheid_id`)
);

ALTER TABLE `klanten` ADD CONSTRAINT `klanten_fk0` FOREIGN KEY (`adres`) REFERENCES `locatie`(`locatie_id`);

ALTER TABLE `klanten` ADD CONSTRAINT `klanten_fk1` FOREIGN KEY (`opmerkingen`) REFERENCES ``(``);

ALTER TABLE `klanten` ADD CONSTRAINT `klanten_fk2` FOREIGN KEY (`rooster`) REFERENCES `Roostertijden`(`rooster_ID`);

ALTER TABLE `Roostertijden` ADD CONSTRAINT `Roostertijden_fk0` FOREIGN KEY (`dagdelen`) REFERENCES `dagdelen`(`aanwezigheid_id`);
