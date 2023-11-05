create table barcodes (
 id int generated always as identity primary key,
 taxon varchar(50) not null, -->Größere stringlänge
 type varchar(1),
 voucherID varchar(12),
 gardenID varchar(30), -->Größere stringlänge
 sampleID varchar(12),
 origin varchar(70), --> Größere stringlänge
 rpoB varchar(12),
 rpoC varchar(12),
 matK varchar(12),
 trnHpsbA varchar(12),
 rpl32 varchar(12)
)


--Daten einfügen
insert into BARCODES (taxon, type, voucherID, gardenID, sampleID, origin, rpob, rpoc, matk, trnHpsbA, rpl32) ( select * from csvread('C:\Users\Julian\Downloads\Aufgabenblatt5\barcodes.csv'))


--überprufen ob Daten eingefügt wurden
selct * from barcodes

--Zeigt keine Dubletten der ganzen Tabelle an
select distinct * from barcodes

--Zeigt keine Doppelten Daten der Spalte Taxon an
select distinct Taxon from barcodes
--Es sind 75 einzelne Daten

create table taxa(
 id int generated always as identity primary key,
 name varchar(50) unique not null -->varchar muss auf 50 gesetzt werden, Name soll unique und nicht null sein.
)

--Daten von Spalte Taxon in Tabelle Taxa kopieren
insert into taxa (name)
(select distinct taxon from barcodes where taxon is not null)

--überprüfen:
select * from taxa

--Spalte TaxonID hinzufügen
alter table barcodes add column taxonid int

--Referenzierte Spalte
alter table barcodes add foreign key (taxonid) references taxa(id)

--IDs einfügen
update barcodes
set taxonId = (select id from taxa where name = barcodes.taxon)

--löschen der Spalte taxon
alter table barcodes drop column taxon