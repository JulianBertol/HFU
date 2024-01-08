--a)
select count(name)
from TITANIC t inner join EMBARKED e
on e.id=EMBARKED_ID
where e.id = 4

--914

--b)
select count(name)
from TITANIC t left outer join EMBARKED e
on e.id=EMBARKED_ID
where e.id is null

--2

--c)
select t.name,e.city, x.name
from TITANIC t left outer join EMBARKED e
on e.id=EMBARKED_ID
left outer join TICKETS x
on x.id=TICKET_ID
where t.name like 'Lovell%'

--Southampton, A/5 21173

--d)
select
count(case when e.id = 2 then e.city end) as Cherbourg,
count(case when e.id = 3 then e.city end) as Queenstown,
count(case when e.id = 4 then e.city end )as Southampton
from
TITANIC t
inner join 
EMBARKED e
on e.id=EMBARKED_ID

--e)
select t.name, x.name as TICKET
from TITANIC t 
inner join EMBARKED e
on e.id=EMBARKED_ID
inner join TICKETS x
on x.id=TICKET_ID
where t.id = 1014

--f)
select x.name,t.ticket_id, count(t.ticket_id)
from tickets x
inner join titanic t
on x.id = t.ticket_id
group by t.ticket_id
having count(t.ticket_id) > 1

--g)
--lösung 1
select x.name
from tickets x
inner join titanic t
on t.ticket_id = x.id
group by t.ticket_id
having count(t.ticket_id) > 1
and count(distinct t.embarked_id) > 1

--lösung 2
SELECT MAX(t.name) AS name, MAX(x.name) AS Ticketnummer, t.ticket_id, MAX(t.embarked_id) AS embarked_id
FROM tickets x
INNER JOIN titanic t ON t.ticket_id = x.id
GROUP BY t.ticket_id
HAVING COUNT(t.ticket_id) > 1 AND COUNT(DISTINCT t.embarked_id) > 1