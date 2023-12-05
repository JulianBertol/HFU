#include <stdio.h>

struct Datum{
int day, month, year;
enum month{Januar = 1, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember};
};

struct Person{
char name [20];
char vorname [20];
Datum date;
};

int main(){
    Person a[] ={
                {"Angela", "Merkel", 17, Datum::Januar, 1954},
                {"Donald", "Trump", 14, Datum::Juni, 1946},
                {"Isaac", "Newton", 4, Datum::Januar, 1643},
                {"Albert", "Einstein", 14, Datum::März, 1879},
                {"Olaf", "Scholz", 14, Datum::Juni, 1958} 
                };
    
    int personenanzahl = sizeof(a) / sizeof(a[0]);
    //comming soon
    return 0;
}