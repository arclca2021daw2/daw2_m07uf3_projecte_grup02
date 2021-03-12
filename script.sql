use mysql;
create user 'admin'@'localhost' identified by 'fjeclot';
create database ongs;
use ongs;
create table associacio(CIF varchar(9), nom varchar(20), adresa varchar(20), poblacio varchar(20), comarca varchar(20), tipus varchar(20), utilitat_publica boolean);
grant select,insert,delete, update on bdcli.tlcli to 'admin'@'localhost';
