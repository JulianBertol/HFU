--Aufgabe 1
--a)
select NAME from TITANIC
where TICKET in('113038', '1601', '21228', 'C 17368', 'A/5
21173', 'A./5. 2152', '54636')

--b)
select COUNT(Name) from TITANIC
--1309

--c)
select COUNT(Name) from TITANIC
where SURVIVED = 1
--500 haben überlebt

select COUNT(Name) from TITANIC
where SURVIVED = 0
--809 sind gestorben

--d)
select count(NAME) from TITANIC
where AGE <= 15
--115

select count(NAME) from TITANIC
where AGE > 15
--931

/*931 + 115 = 1046
Es gibt mehr Passagiere in Aufgabe b, da in Aufgabe d die Null werte nicht mit gezählt werden.
*/

select count(NAME) from TITANIC
where AGE is NULL

--1046 + 263 = 1309

--e)
select avg(AGE) as durchschnitt, max(AGE) as maximal, min(AGE) as minimal from TITANIC

--f)
Select avg(AGE) as durchschnitsalter, SURVIVED
from TITANIC
group by SURVIVED

--g)
select BOAT from TITANIC
where BOAT is not NULL and BOAT not like '% %'

--h)
select distinct BOAT as Boot, count(NAME) as Anzahl from TITANIC
where BOAT is not NULL and BOAT not like '% %'
group by BOAT

--i)
select distinct BOAT as Boot, count(NAME) as Anzahl from TITANIC
where BOAT is not NULL and BOAT not like '% %'
group by BOAT
having count(NAME) >= 25

--j)
select * from TITANIC
where TICKET =(
select TICKET from TITANIC
group by TICKET
having sum(FAREINT) != min(FAREINT) * count (FAREINT)
)

--k)
select CLASS as Klasse, count(SURVIVED) as Anzahl, SURVIVED as Überlebt from TITANIC
group by CLASS, SURVIVED