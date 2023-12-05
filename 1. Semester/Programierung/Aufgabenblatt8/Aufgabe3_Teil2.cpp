#include <stdio.h>
#include <stdlib.h>

struct Datum
{
    int day;
    int year;
    enum month{Januar = 1, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember};
};

struct FullDatum
{
    int day, month, year;
};


void druckeDatum(FullDatum d){
    printf("%i.%i.%i\n", d.day, d.month, d.year);
}

void druckeDatump(FullDatum &d){
    printf("%i.%i.%i\n", d.day, d.month, d.year);
}

void druckeDatum2(FullDatum *d){
    printf("%i.%i.%i\n", d->day, d->month, d->year);
}

int main(){
    Datum date = {7,2023};
    int month = Datum::Dezember;
    FullDatum fulldate = {7, month, 2023};
    druckeDatum(fulldate);

    FullDatum *pdate = &fulldate;
    druckeDatump(*pdate);

    druckeDatum2(pdate);
    return 0;
}