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
SELECT
  AVG(CASE WHEN SURVIVED = 1 THEN AGE END) AS Durchschnitt_ueberlebende,
  AVG(CASE WHEN SURVIVED = 0 THEN AGE END) AS Durchschnitt_nicht_ueberlebende
FROM TITANIC;

--g)
select distinct BOAT, Name from TITANIC
where BOAT is not null and BOAT not like '%___'

