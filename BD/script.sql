DROP DATABASE IF EXISTS ongs;
CREATE DATABASE ongs;
USE ongs;

CREATE TABLE ongs(CIF VARCHAR(9) PRIMARY KEY, nom VARCHAR(20) NOT NULL, 
adresa VARCHAR(20) NOT NULL, poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL, 
tipus VARCHAR(20) NOT NULL, utilitat_publica BOOLEAN NOT NULL);

CREATE TABLE socis(NIF VARCHAR(9) PRIMARY KEY, nom_cognoms VARCHAR(40) NOT NULL, adresa VARCHAR(20) NOT NULL, 
poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL, tel_fixe VARCHAR(9) NOT NULL, 
tel_mobil VARCHAR(9) NOT NULL, email VARCHAR(30) NOT NULL, data_alta DATE NOT NULL, 
quota_mensual DECIMAL(4,2) NOT NULL, aportacio_anual DECIMAL(5,2) NOT NULL);

CREATE TABLE socis_ongs(CIF_ONG VARCHAR(9), NIF_soci VARCHAR(9), 
PRIMARY KEY (CIF_ONG, NIF_soci), FOREIGN KEY (CIF_ONG) REFERENCES Ong(CIF),
FOREIGN KEY (NIF_soci) REFERENCES Soci(NIF));

CREATE TABLE treballadors(NIF VARCHAR(9) PRIMARY KEY, nom_cognoms VARCHAR(40) NOT NULL,
adresa VARCHAR(20) NOT NULL, poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL,
tel_fixe VARCHAR(9) NOT NULL, tel_mobil VARCHAR(9) NOT NULL, email VARCHAR(20) NOT NULL,
data_ingres DATE NOT NULL, CIF_ong VARCHAR(9), FOREIGN KEY (CIF_ong) REFERENCES Ong(CIF));

CREATE TABLE treballadors_voluntaris(NIF VARCHAR(9) PRIMARY KEY, edat TINYINT NOT NULL,
professio VARCHAR(20) NOT NULL, hores TINYINT NOT NULL, FOREIGN KEY (NIF) REFERENCES Treballador(NIF));

CREATE TABLE treballador_professionals(NIF VARCHAR(9) PRIMARY KEY, carrec VARCHAR(20),
quantitat_SS DECIMAL(5,2) NOT NULL, percentatge_irpf DECIMAL(2,1) NOT NULL,
FOREIGN KEY (NIF) REFERENCES Treballador(NIF));

CREATE TABLE usuaris (nom_usuari VARCHAR(20) PRIMARY KEY, contrasenya VARCHAR(40) NOT NULL,
nom VARCHAR(10) NOT NULL, cognoms VARCHAR(25) NOT NULL, email VARCHAR(30) NOT NULL,
mobil VARCHAR(9) NOT NULL, ultima_entrada DATETIME, ultima_sortida DATETIME, administrador BOOLEAN NOT NULL);

INSERT INTO usuaris VALUES ('segavi2021daw2',MD5('fjeclot'),'Sergio','Garcia','segavi2021daw2@gmail.com','666666666',NULL,NULL,TRUE);
INSERT INTO usuaris VALUES ('arclca2021daw2',MD5('fjeclot'),'Arnau','Claramunt','arclca2021daw2@gmail.com','666666666',NULL,NULL,TRUE);

CREATE USER IF NOT EXISTS 'arclca2021daw2'@'localhost' IDENTIFIED BY 'fjeclot';
CREATE USER IF NOT EXISTS 'segavi2021daw2'@'localhost' IDENTIFIED BY 'fjeclot';
GRANT ALL ON ongs.* TO 'segavi2021daw2'@'localhost';
GRANT ALL ON ongs.* TO 'arclca2021daw2'@'localhost';


