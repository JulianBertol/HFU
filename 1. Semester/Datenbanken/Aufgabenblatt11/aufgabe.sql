--1)
select count(e.CITY), e.CITY
from EMBARKED e
inner join TITANIC t
on t.EMBARKED_ID = e.ID
group by e.CITY

--2)
--a)
select NAME, AGE
from TITANIC
order by AGE desc
limit 1

--b)
select count(*)
from titanic
where embarked_id = (select id from embarked where city like '%town')

--c)
select count(*)
from titanic
where embarked_id in (select id from embarked where city like '%town')

--d)
select distinct(embarked_id)
from titanic
where embarked_id = (select distinct(embarked_id) from titanic 
                    where embarked_id is not null
                    order by embarked_id asc 
                    limit 1)

--e)
select name
from titanic
where embarked_id = (select embarked_id from titanic 
where embarked_id is not null order by embarked_id asc limit 1)

--f)
select name, age
from titanic
where age>= any (select age from titanic)

--wenn wie in Aufgabe 1 funktionieren soll dann
select name, age
from titanic
where age>= any (select age from titanic)
order by age desc
limit 1