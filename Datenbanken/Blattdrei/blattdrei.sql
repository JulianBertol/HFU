--Aufgabe 1
--Aufgabe a:
drop table Cities

--

create table CITIES(
Stadt varchar(20),
Land varchar(20),
Einwohner varchar(20),
Flaeche varchar (20),
Laengengrad varchar(20),
Breitengrad varchar (20),
id int generated always as identity primary Key
);


--Aufgabe b:

--Daten hinzufügen
INSERT INTO Cities (Stadt, Land, Einwohner, Flaeche)
VALUES ('Augsburg', 'Deutschland', 300000, 146),
       ('Muenchen', 'Deutschland', 300000, 300),
       ('London', 'England', 2000000, 200),
       ('NY City', 'USA', 2300000, 250),
       ('Paris', 'Frankreich', 2102650, 105),
       ('Paris', 'USA', 24007, 96);


--tabelle Attraktionen hinzufügen
CREATE TABLE Attractions
(
    id           int          NOT NULL GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    Name         varchar(255) NOT NULL,
    Beschreibung varchar(50)  NOT NULL,
    Stadt        int          NOT NULL,
    FOREIGN KEY (Stadt) REFERENCES Cities (id)
);

--Daten hinzufügen 
INSERT INTO Attractions (Name, Beschreibung,  Stadt)
VALUES ('Rennrad fahren', 'Fahre ein Rennrad', 2),
       ('Eiffelturm', 'Der Turm', 5);


--Fehlermeldung:
/*
Eindeutiger Index oder Primärschlüssel verletzt: "PRIMARY KEY ON PUBLIC.ATTRAKTIONEN_CITIES(ID) ( /* key:2 */ 'Paris', 'Frankreich', 'Eifelturm', 2)"
Unique index or primary key violation: "PRIMARY KEY ON PUBLIC.ATTRAKTIONEN_CITIES(ID) ( /* key:2 */ 'Paris', 'Frankreich', 'Eifelturm', 2)"; SQL statement:
insert into ATTRAKTIONEN_CITIES values ('Koeln', 'Deutschland', 'Koelner Dom',2) [23505-224] 23505/23505 (Hilfe)

bedeutet:
das es schon eine ID mit der nummer 2 gibt. Da vorher festgelegt wurde, das es jede ID nur einmal geben darf kommt hier ein fehler
*/


--Aufgabe 2

alter table CITIES add laengengrad decimal (6,4) --6 Nummern vor dem , und 4 Nummer nach dem ,
alter table CITIES add breitengrad decimal (6,4)

--Aufgabe b

UPDATE Cities
SET laengengrad = 11.5819,
    breitengrad = 48.1351
WHERE Stadt = 'Muenchen';

UPDATE Cities
SET laengengrad = -0.1277,
    breitengrad = 51.5070
WHERE Stadt = 'London';


--Aufgabe C
-- Löschen der beschreibung
ALTER TABLE Attractions
    DROP
        COLUMN Beschreibung;

--Aufgabe D
--löschen der tabelle Attractions
drop table Attractions 
--
-- Tabelle erstellen ohne foreign key
CREATE TABLE Attractions
(
    id           int          NOT NULL GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    Name         varchar(255) NOT NULL,
    Beschreibung varchar(50)  NOT NULL,
    Stadt        int          NOT NULL
);

--
--foreign key hinzufügen
ALTER TABLE Attractions
    ADD CONSTRAINT ref_tabelle_stadt FOREIGN KEY (Stadt) references Cities (id);


--Aufgabe 3

create table reise(
 id int,
 ziel varchar(20),
 preis int,
 dauer int,
 verkehrsmittel varchar(20),
 anfangsdatum varchar(20)
)

--Primary Key hinzufügen
alter table reise alter id int not null;
alter table REISE add GENERATED ALWAYS AS IDENTITY PRIMARY KEY (id);

--Preis darf nicht kleiner als 0 sein
ALTER TABLE Reise
    ADD CONSTRAINT reise_preis_constraint CHECK (preis > 0);

--Dauer darf nicht kleiner als 0 sein
ALTER TABLE Reise
    ADD CONSTRAINT reise_dauer_constraint CHECK (dauer > 0);

--Daten hinzufügen
insert into REISE values (1, 'Berlin', 300, 13, 'Auto', '14,05,2024')
insert into REISE values (2, 'Istanbul', 700, 11, 'Bus, Flugzeug', '11,03,2024')

--preis mindestens 50
ALTER TABLE Reise
    ADD CONSTRAINT reise_preis_groesser_50_constraint CHECK (preis / dauer >= 50);

--Tabelle Verkehrsmittel erstellen
CREATE TABLE Verkehrsmittel
(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(20)
);

--Tabelle Ziele erstellen
CREATE TABLE Ziele
(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) 
);

alter table ziele add constraint unique_name unique(name)

--TraumReise als neue Reise erstellen
CREATE TABLE TraumReise
(
    id                int PRIMARY KEY AUTO_INCREMENT,
    ziel_id           int,
    preis             int,
    dauer             int,
    verkehrsmittel_id int,
    anfangsdatum      varchar(20),
    FOREIGN KEY (ziel_id) REFERENCES Ziele (id),
    FOREIGN KEY (verkehrsmittel_id) REFERENCES Verkehrsmittel (id)
);

--Daten hinzufügen

INSERT INTO Verkehrsmittel (name)
VALUES ('Zug'),
       ('Auto'),
       ('Flugzeug')

--

INSERT INTO Ziele (name)
VALUES ('Rom'),
       ('Florenz'),
       ('London');

--

INSERT INTO TraumReise (preis, anfangsdatum, dauer, ziel_id, verkehrsmittel_id)
VALUES (400, '14.12.23', 10, SELECT id from Ziele WHERE name = 'Rom',
        SELECT id from Verkehrsmittel WHERE name = 'Zug'),
       (200, '23.11.2025', 3, SELECT id from Ziele WHERE name = 'Florenz',
        SELECT id from Verkehrsmittel WHERE name = 'Auto'),
       (150, '10.10.2025', 5, SELECT id from Ziele WHERE name = 'London',
        SELECT id from Verkehrsmittel WHERE name = 'Flugzeug');

--Aufgabe 4

--primary key 

alter table TITANIC ADD COLUMN id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY;

--nicht Dubletten anzeigen:
select distinct embarked, parch, SIBSP from titanic

--Aufgabe C
--alter darf nicht unter 0 sein
alter table titanic add constraint age_under_zero check (age >=0)

--Class nur von 1-3
alter table titanic add constraint class_only_three check (class <=3 or class >=0)

--survived nur 1 oder 2
alter table titanic add constraint survived_only_one_or_two check (survived <=2 or survived >=0)

--nur Male oder Female 
ALTER TABLE Titanic ADD CONSTRAINT gender_constraint CHECK (gender IN ('male', 'female'));

--parch über oder gleich 0
alter table titanic add constraint parch_over_zero check(parch>=0)

--SIBSP nicht über 0 oder gleich 0
alter table titanic add constraint sibsp_over_zero check(sibsp>=0)

--fareint nicht über 0 oder gleich 0
alter table titanic add constraint fareint_over_zero check(fareint>=0)

--Nur QSC in embarked
alter table titanic add constraint embarked_only_CQS check(embarked in ('Q','S','C'))

--Aufgabe D
--Create Table
create table embarked(
id int generated always as identity primary key,
name varchar(1) unique
);

--Aufgabe E
INSERT INTO Embarked(name)
SELECT DISTINCT embarked
FROM Titanic
where EMBARKED IS NOT NULL;

--Name zu kurzel änder für nächste aufgabe
alter table embarked rename column name to kurzel


--Aufgabe F

alter table embarked
    add column name varchar(20)

--

ALTER TABLE Embarked
    ADD CONSTRAINT embarked_name_constraint CHECK (LOWER(LEFT(name, 1)) = LOWER(kurzel));

-- Aufgabe G
update embarked
set name = 'cherbour'
where kurzel = 'C'

--

update embarked
set name = 'Queenstown'
where kurzel = 'Q'

--

update embarked
set name = 'Southampton'
where kurzel = 'S'
