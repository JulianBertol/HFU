#include <stdio.h>
#include <string.h>

struct Datum{
int day, month, year;
enum month{Januar = 1, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember};
};

struct Person{
char vorname [20];
char name [20];
Datum date;
};

Person findeGeburtsdatum(char *name, char *vorname, Person *personen, int personenanzahl){
    for(int i = 0; i < personenanzahl; i++){
        int resultvor = strcmp(vorname, personen[i].vorname);
        int resultnach = strcmp(name, personen[i].name);
        if(resultvor == 0 && resultnach == 0){
            return personen[i];
            break;
        }
    }
    Person leer = {" "};
    return leer;
}

int main(){
    Person a[] ={
                {"Angela", "Merkel", 17, Datum::Januar, 1954},
                {"Donald", "Trump", 14, Datum::Juni, 1946},
                {"Isaac", "Newton", 4, Datum::Januar, 1643},
                {"Albert", "Einstein", 14, Datum::März, 1879},
                {"Olaf", "Scholz", 14, Datum::Juni, 1958} 
                };
    
    int personenanzahl = sizeof(a) / sizeof(a[0]);
    const int length = 20;
    char vorname [length];
    char name [length];

    printf("Gib den zu suchenden Vornamen an: \n");
    fgets(vorname, length - 1, stdin);
    vorname[strcspn(vorname, "\n")] = '\0';  // Remove line break
    printf("Gib den zu suchenden Nachname an: \n");
    fgets(name, length - 1, stdin);
    name[strcspn(name, "\n")] = '\0';  // Remove line break

    Person suche = findeGeburtsdatum(name, vorname, a, personenanzahl);
    int result = strcmp(suche.vorname, " ");

    if (result == 0){
        printf("Keine Daten gefunden!");
    }else{
    printf("%s %s wurde am %i.%i.%i geboren.", suche.vorname, suche.name, suche.date.day, suche.date.month, suche.date.year);
    }
    
    return 0;
}