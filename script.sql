CREATE DATABASE ongs;
USE ongs;

CREATE TABLE Associacio(CIF VARCHAR(9) PRIMARY KEY, nom VARCHAR(20) NOT NULL, 
adresa VARCHAR(20) NOT NULL, poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL, 
tipus VARCHAR(20) NOT NULL, utilitat_publica BOOLEAN NOT NULL);

CREATE TABLE Soci(NIF VARCHAR(9) PRIMARY KEY, nom_cognoms VARCHAR(40) NOT NULL, adresa VARCHAR(20) NOT NULL, 
poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL, tel_fixe VARCHAR(9) NOT NULL, 
tel_mobil VARCHAR(9) NOT NULL, email VARCHAR(30) NOT NULL, data_alta DATE NOT NULL, 
quota_mensual DECIMAL(4,2) NOT NULL, aportacio_anual DECIMAL(5,2) NOT NULL);

CREATE TABLE Treballador_voluntari(NIF VARCHAR(9) PRIMARY KEY, nom_cognoms VARCHAR(40) NOT NULL,
adresa VARCHAR(20) NOT NULL, poblacio VARCHAR(20) NOT NULL, comarca VARCHAR(20) NOT NULL,
tel_fixe VARCHAR(9) NOT NULL, tel_mobil VARCHAR(9) NOT NULL, email VARCHAR(20) NOT NULL,
data_ingres DATE NOT NULL, edat TINYINT NOT NULL, professio VARCHAR(20) NOT NULL, hores TINYINT NOT NULL,
CIF_ong VARCHAR(9), FOREIGN KEY (CIF_ong) REFERENCES Associacio(CIF));

CREATE TABLE Treballador_professional AS 
SELECT NIF, nom_cognoms, adresa, poblacio, comarca, tel_fixe, tel_mobil, email, data_ingres
FROM Treballador_voluntari;

ALTER TABLE Treballador_professional
ADD carrec VARCHAR(20) NOT NULL;

ALTER TABLE Treballador_professional
ADD quantitat_SS SMALLINT NOT NULL;

ALTER TABLE Treballador_professional
ADD percentatge_irpf TINYINT NOT NULL;

CREATE TABLE Socis_associacions(CIF_associacio VARCHAR(9), NIF_soci VARCHAR(9), 
PRIMARY KEY (CIF_associacio, NIF_soci), FOREIGN KEY (CIF_associacio) REFERENCES Associacio(CIF),
FOREIGN KEY (NIF_soci) REFERENCES Soci(NIF));

CREATE DATABASE usuaris;
USE usuaris;

CREATE TABLE usuaris(nom_usuari VARCHAR(10) PRIMARY KEY, contrasenya VARCHAR(10) NOT NULL,
nom VARCHAR(10) NOT NULL, cognoms VARCHAR(25) NOT NULL, email VARCHAR(20) NOT NULL,
ultima_entrada DATETIME, ultima_sortida DATETIME, administrador BOOLEAN NOT NULL);

INSERT INTO usuaris VALUES ('admin', 'fjeclot', 'admin', 'admin', 'admin@admin.com', NULL, NULL, true);
DROP USER admin@localhost;
FLUSH PRIVILEGES;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'fjeclot';
GRANT ALL ON *.* TO 'admin'@'localhost';