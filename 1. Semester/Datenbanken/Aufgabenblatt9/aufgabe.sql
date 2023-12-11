create table Fakultät(
    id int generated always as identity primary key,
    name varchar(20) unique
)

create table Dozent(
    id int generated always as identity primary key,
    firstname varchar (20),
    lastname varchar(20),
    Geburtsdatum date,
    fakultät int references Fakultät
)

create table Student(
    id int generated always as identity primary key,
    firstname varchar (20),
    lastname varchar(20),
    Geburtsdatum date,
    Matrikelnummer int unique,
    fakultät int references Fakultät
)


create table Vorlesung(
    id int generated always as identity primary key,
    Fachname varchar(20),
    Dozent int references Dozent unique
)

create table student_vorlesung(
id int generated always as identity primary key,
name int references STUDENT,
Vorlesung int references Vorlesung
)
alter table student_vorlesung add constraint un_name_vorlesung unique(name,vorlesung)

insert into FAKULTÄT(name) values ('Informatik')
insert into FAKULTÄT(name) values ('Digitale Medien')

insert into DOZENT(firstname, lastname, geburtsdatum, fakultät) values('Max', 'Mustermann', '1989-11-09', 1)
insert into DOZENT(firstname, lastname, geburtsdatum, fakultät) values('Tim', 'Struppi', '1973-10-12', 3)
insert into DOZENT(firstname, lastname, geburtsdatum, fakultät) values('Thomas', 'Schulz', '1983-01-10', 2)
insert into DOZENT(firstname, lastname, geburtsdatum, fakultät) values('Donald', 'Duck', '1972-03-02', 4)
insert into DOZENT(firstname, lastname, geburtsdatum, fakultät) values('Daisy', 'Duck', '1974-07-12', 1)

insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Jakob', 'Schulz', '2004-03-24',243213, 1)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Tim', 'Rigwald', '2004-02-12',253233, 1)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Leon', 'Kramar', '2002-12-10',283239, 1)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Julian', 'Bertol', '2004-03-05',275085, 2)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Julian', 'Niethammer', '2005-07-29	',265535, 2)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Julian', 'Faller', '2003-02-02',235138, 2)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('David', 'Hoffmann', '1994-10-12',291519, 3)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Dominik', 'Heiser', '2005-01-29',231312, 3)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Nils', 'Mustermann', '1992-11-02',231113, 3)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Kevin', 'Müller', '2002-03-12',221639, 4)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Thomas', 'Müller', '2002-03-12',287231, 4)
insert into STUDENT(firstname, lastname, geburtsdatum, matrikelnummer, fakultät) values('Manuel', 'Neuer', '1998-08-19',192742, 4)

insert into VORLESUNG(Fachname, Dozent) values('Mathematik', 3);
insert into VORLESUNG(Fachname, Dozent) values('Datenbanken', 1);
insert into VORLESUNG(Fachname, Dozent) values('Programieren', 2);

insert into student_vorlesung(name, vorlesung) values(1,1)
insert into student_vorlesung(name, vorlesung) values(1,2)
insert into student_vorlesung(name, vorlesung) values(1,3)
insert into student_vorlesung(name, vorlesung) values(2,1)
insert into student_vorlesung(name, vorlesung) values(2,2)
insert into student_vorlesung(name, vorlesung) values(2,3)
insert into student_vorlesung(name, vorlesung) values(3,1)
insert into student_vorlesung(name, vorlesung) values(3,2)
insert into student_vorlesung(name, vorlesung) values(3,3)
insert into student_vorlesung(name, vorlesung) values(4,1)
insert into student_vorlesung(name, vorlesung) values(4,2)
insert into student_vorlesung(name, vorlesung) values(4,3)
insert into student_vorlesung(name, vorlesung) values(5,3)
insert into student_vorlesung(name, vorlesung) values(5,2)
insert into student_vorlesung(name, vorlesung) values(6,2)
insert into student_vorlesung(name, vorlesung) values(7,1)