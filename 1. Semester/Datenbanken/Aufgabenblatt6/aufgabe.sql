--Aufgabe 1
--a)
select NAME
from TITANIC
where TICKET='A/5. 3336'

/*Output: 
NAME  
Lobb, Mrs. William Arthur (Cordelia K Stanlick)
Lobb, Mr. William Arthur
--> sind die selben namen, nur das einmal noch ein 2.Name in der Klammer steht
*/

--b)
/*Die spalte SIBSP und Parch zeigen verwandte an
-Parch:
        Bedeutet, Eltern/Kinder. Wenn PARCH also den bsp den Wert 1 hat dann bedeutet dies, das diese Person mit einem Elternteil
        oder einem Kind reist
-SIBSP:
        Bedeutet, Geschwister oder Ehepartner. Wenn diese Spalte also den Wer 1 hat bedeutet dies, das diese Person mit einem 
        Ehepartner oder ein Geschwisterteil reist.
*/
select NAME
from TITANIC
where SIBSP = 0 and PARCH = 0

--c)
select distinct CLASS
from TITANIC
--Klasse 1,2,3

--d)
select NAME
from TITANIC
where FAREINT is null
--output->Storey, Mr. Thomas

--e)
select NAME
from TITANIC
where FAREINT = 0

--f)
--Wenn man nach  John Jacob Astor findet man nichts. Deshalb muss man %und den nachname nehmen.
select TICKET
from TITANIC
where NAME like '%Astor%'
--PC 17757

--g)
select NAME
from TITANIC
where TICKET = 'PC 17757'
/*Es gibt mehrere Personen die mit diesem Ticket gereist sind. Output:
NAME  
Astor, Col. John Jacob
Robbins, Mr. Victor
Bidois, Miss. Rosalie
Astor, Mrs. John Jacob (Madeleine Talmadge Force)
Endres, Miss. Caroline Louise
*/

--h)
select NAME
from TITANIC
where BOAT is null and SURVIVED = 1
--Ja, 23

--i)
select NAME
from TITANIC
where BOAT is not null and SURVIVED = 0
--ja, 9

--j)
select NAME
from TITANIC
where not (NAME like '%Mr.%' or NAME like '%Master%')

--k)
select distinct BOAT
from TITANIC
where BOAT is not null
--Beispielsweise könnte boot nummer 1 und 2 das Boot gleicher Art sein.

--i)
select NAME
from TITANIC
where HOME like '%Germany'
--Nourney, Mr. Alfred ("Baron von Drachstedt")

--m)
select NAME
from TITANIC
where AGE between 10 and 16 and GENDER = 'female'

--n)
select NAME
from TITANIC
where AGE <=12 and PARCH = 0 and SIBSP = 0