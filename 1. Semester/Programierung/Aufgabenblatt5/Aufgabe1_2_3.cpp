#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <cstring>
#include <iostream>

//random funktion für Zahlenbereiche
int randomnumber(int min, int max){
    return min + rand() % (max - min + 1);
}


int main(){
    //Aufgabe 1
    {
    srand(time(0));
    int random [20];
    int sum_even = 0;
    int sum_odd = 0;
    printf("Die Zufallszahlen lauten:\n");
    for (int i = 0; i < 20; i++){
       random [i] = rand();
       printf("%i \n", random[i]);
       if(random[i] % 2 == 0){
        sum_even +=  random[i];
       }else{
        sum_odd += random[i];
       }
    }
    printf("Das ergebniss aller geraden Zahlen lautet: %i \n", sum_even);
    printf("Das ergebniss aller ungeraden Zahlen lautet: %i\n", sum_odd);
    }


    //Aufgabe 2
    {
    srand(time(0));
    int random [100];
    int count [51];
    printf("Die 2. Zufallszahlen lauten:\n");
    for (int i = 0; i < 100; i++){
        random[i] = randomnumber(0,50);
        printf("%i \n",random[i]);
    }
    }

    //Aufgabe 3
    {
    int eingabe; //Variable für Eingabe des Users
    int rechnung; // wird später /2 gerechnet
    int rest; //Der rest der Rechnung
    int binary[100];
    int i = 0;

    printf("Geben sie eine ganzzahlige Zahl ein!: \n");
    scanf("%i", &eingabe);

    if (eingabe <0 ){
        printf("Du hast eine negative Zahl eingeben!");
    }else{
        do{
            //in Binär umrechnen
            rest = eingabe % 2;
            rechnung = eingabe / 2;
            eingabe = rechnung;
            binary[i] = rest;
            i = i + 1;
            //printf("%i", rest);
        }while(rechnung > 0);
        printf("\n");
        for (int c = i - 1; c >=0; c = c - 1){
            i = i - 1;
            printf("%i", binary[c]);
        }
        
    }

    }

}