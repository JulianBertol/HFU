create table author(
    aid int generated always as identity primary key,
    name varchar(20)
);

create table buch(
    bid int generated always as identity primary key,
    titel varchar(20),
    author int references author unique
);

--b)
create table author(
    aid int generated always as identity primary key,
    name varchar(20)
);

create table buch(
    bid int generated always as identity primary key,
    titel varchar(20),
    author int references author not null unique
);


--c)
create table author(
    aid int generated always as identity primary key,
    name varchar(20)
);

create table buch(
    bid int generated always as identity primary key,
    titel varchar(20)
);

create table buchautor(
    bid int references buch,
    aid int references author,
    primary key(aid,bid)
);