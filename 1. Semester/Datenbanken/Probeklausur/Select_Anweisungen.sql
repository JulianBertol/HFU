--1
--c
select name, vorsitzender
from partei

--d
select name, vorsitzender
from partei
where vorsitzender is not null

--e)
select name
from partei
where name is null

--f)
--i)
select p.name from partei p
inner join Abgeordneter a
on a.Partei = p.ID


--ii)
select name 
from partei
where id in (select partei from abgeordneter where partei is not null)

--g)
select a.name, p.name 
from abgeordneter a
left outer join Partei p
on a.partei = p.id

--h)
select p.name, count(a.name)
from partei p
inner join abgeordneter a
on p.id = a.partei
group by p.name

--i)
select p.name, count(a.name)
from partei p
left outer join abgeordneter a
on p.id = a.partei
group by p.name

--j)
select p.name
from partei p
inner join abgeordneter a
on a.partei = p.id
group by p.name
order by count(a.name)desc
limit 1

--k)
fehler es gibt kein a.id

--i)
select partei
from abgeordneter 
where ID < 5