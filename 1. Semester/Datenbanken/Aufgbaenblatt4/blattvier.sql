--Aufgabe 1
create table t(
c int
);
alter table t add primary key (c);
/*Feld "C" darf nicht nullable sein
Column "C" must not be nullable; SQL statement:
alter table t add primary key (c) [90023-224] 90023/90023 (Hilfe)

Die ergenzung des primary key schlägt fehl, da dieser nicht den wert null haben darf.
*/

--Tabelle muss zu folgenden geändert werden:
create table t(
c int not null
);
alter table t add primary key (c);

--Aufgabe 2
drop table if exists t1;
create table t1(
    id int primary key
);
insert into t1 values(4711);
drop table if exists t2;
create table t2(
    id int primary key,
    c int references t1
);
insert into t2 values (0,4711);
delete from t2; -- ->Zusätzliche Anweisung. 
delete from t1;
--Es gibt einen Fehler da t2 abhängig von t1 ist. daher muss man erst die Daten aus t2 löschen

--2 C)
drop table t1;
create table t1(
 id int primary key
);
insert into t1 values(4711);
drop table t2;
create table t2(
 id int primary key,
 c int references t1 on delete set null
);
insert into t2 values(0,4711);
delete from t1;
--t1 wird auf null gesetzt weil in t2 gesagt wird, sobald t1 gelöscht wird soll c nul werden.

--2 D)
drop table t1;
create table t1(
 id int primary key
);
insert into t1 values(4711);
drop table t2;
create table t2(
 id int primary key,
 c int references t1 on delete cascade
);
insert into t2 values(0,4711);
delete from t1;
--Bedeutet, dass wenn der referencierte Key gelöscht wird, dass die Spalte leer sein soll

--2 E)
delete from t2;
delete from t1
create table t3(
    id int primary key,
    c int references t2 on delete cascade
);

--2 F)
alter table t1 add column c int;

--2 G)
alter table t1 add foreign key (c) references t3(id)

--2 H)
--Siehe Screenshot

--2 i)
/*Referentielle Integrität verletzt: "CONSTRAINT_A5D: PUBLIC.T1 FOREIGN KEY(C) REFERENCES PUBLIC.T3(ID) (2)"
Referential integrity constraint violation: "CONSTRAINT_A5D: PUBLIC.T1 FOREIGN KEY(C) REFERENCES PUBLIC.T3(ID) (2)"; SQL statement:
insert into t1 values (1,2) [23506-224] 23506/23506*/

--Man kann keine Daten einfügen, da sich die Tabellen gegenseitig Blockieren, da für jede Tabelle ein reference key besteht

--2 j)
--Zuerst müssen die references gelöscht werden, damit man die Tabellen löschen kann
alter table t1 drop constraint CONSTRAINT_A5D
alter table t2 drop constraint CONSTRAINT_A5E
alter table t3 drop constraint CONSTRAINT_A5F_0

--Tabellen löschen
drop table t3;
drop table t2;
drop table t1;

--Tabellen neu erstellen
create table t1(
    id int generated always as identity primary key,
    c int
);


create table t2(
    id int generated always as identity primary key,
    c int references t1 on delete cascade
);


create table t3(
    id int generated always as identity primary key,
    c int references t2 on delete cascade
);

insert into t1 (c) values(1);
insert into t2 (c) values(0);
insert into t3 (c) values(0);

--Jetzt kann man t1 referenciren
alter table t1 add foreign key (c) references t3(id)

--2 K)
delete from t1;

--es werden alle Daten gelöscht, da alle Daten zusammenhängen

--Aufgabe 3
--3a)
alter table titanic add column embarked_id int
--3b)
alter table titanic add foreign key (embarked_id) references embarked(id)

--3c)
update titanic
set embarked_id = 1
where embarked = 'C'

update titanic
set embarked_id = 2
where embarked = 'Q'

update titanic
set embarked_id = 3
where embarked = 'S'

--3d)
alter table titanic drop column embarked
--3e)
alter table embarked drop column kurzel
--3f)
--schon in aufgabenblatt3 geschehen