#include <stdio.h>
#include <stdlib.h>

struct Datum
{
    int day, year;
    enum month{Januar = 1, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember};
};


int main(){
    Datum date = {7, 2023};
    printf("%i.%i.%i", date.day, date.Dezember, date.year);
    return 0;
}