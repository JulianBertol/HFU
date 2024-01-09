drop table if exists AIRPORTS ,CARRIERS ,FLIGHTS ,TAILNUMS ;

create table carriers(
	id int  primary key,
	name varchar(20) not null unique
);
create table tailnums(
	id int  primary key,
	name  varchar(20) not null unique
);
create table airports(
	id int  primary key,
	name  varchar(20)  not null unique
);
insert into carriers(
	select *
	from csvread('C:\Users\Julian\Downloads\joins\Aufgabenblatt 10\denormalized\carriers.csv'));
insert into airports(
	select *
	from csvread('C:\Users\Julian\Downloads\joins\Aufgabenblatt 10\denormalized\airports.csv'));
insert into tailnums(
	select *
	from csvread('C:\Users\Julian\Downloads\joins\Aufgabenblatt 10\denormalized\tailnums.csv'));


create table flights(
	flight int not null,
	distance int not null,
	scheduled_departure timestamp not null,
	departure timestamp,
	scheduled_arrival timestamp not null,
	arrival timestamp,
	tailnum int references tailnums,
	carrier int not null references carriers,
	origin int not null references airports,
	destination int not null references airports
);


insert into flights(
	select *
	from csvread('C:\Users\Julian\Downloads\joins\Aufgabenblatt 10\denormalized\flights.csv'));

alter table flights add column id int generated always as identity primary key;

