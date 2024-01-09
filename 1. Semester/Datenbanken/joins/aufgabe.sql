--3)
--a)
select count(f.CARRIER) from FLIGHTS f
inner join CARRIERS c
on f.carrier = c.id
where c.name = 'UA'
group by f.CARRIER

--b)
select count(f.FLIGHT) ,f.FLIGHT, c.NAME from FLIGHTS f
inner join CARRIERS c
on c.ID = f.FLIGHT
where c.NAME = 'UA'
group by f.FLIGHT

--c)
select c.NAME, f.FLIGHT, t.NAME from FLIGHTS f
inner join CARRIERS c
on c.ID = f.CARRIER
inner join TAILNUMS t
on t.ID = f.TAILNUM
where c.NAME = 'UA' and f.FLIGHT = 15

--d)
select c.NAME, f.FLIGHT, t.NAME from FLIGHTS f
inner join CARRIERS c
on c.ID = f.CARRIER
left outer join TAILNUMS t
on t.ID = f.TAILNUM
where c.NAME = 'UA' and f.FLIGHT = 15 and t.NAME is NULL

--e)
select f.ARRIVAL, f.DEPARTURE, c.NAME, f.FLIGHT, t.NAME
from FLIGHTS f
inner join CARRIERS c
on c.ID = f.CARRIER
left outer join TAILNUMS t
on t.ID = f.TAILNUM
where c.NAME = 'UA' and f.FLIGHT = 15

--f)
select f.ORIGIN, f. DESTINATION from FLIGHTS f
inner join CARRIERS c
on c.ID = f.CARRIER
inner join AIRPORTS a
on a.ID = f.ORIGIN
where c.NAME = 'UA' and f.FLIGHT = 15
