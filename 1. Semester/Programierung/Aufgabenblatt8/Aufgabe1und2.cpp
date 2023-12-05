#include <stdio.h>
#include <stdlib.h>

struct Punkt
{
    int x, y;
};


int main(){
    //Aufgabe 1
    Punkt p1 = {4,2};
    Punkt p2 = {2,1};

    Punkt summe = {p1.x + p2.x, p1.y + p2.y};

    printf("Die Summe lautet: {%i, %i} \n", summe.x, summe.y);

    //Aufgabe 2
    Punkt list[50];
    int min;
    int kleinste_pos = 1;
    for(int i = 0; i < 50; i++){
        list[i] = {rand(), rand()};
        if(list[i].x < list[kleinste_pos].x){
            min = list[i].x;
            kleinste_pos = i;
        }
        printf("%i. %i, %i\n", i, list[i].x, list[i].y);
    }
    printf("Die kleinste X-Stelle ist an der %i. stelle und lautet: %i\n", kleinste_pos, min);
    
    kleinste_pos = 1;

    for (int i = 0; i < 50; i++){
       if(list[i].y < list[kleinste_pos].y){
       min = list[i].y;
       kleinste_pos = i;
       }
    }
    printf("Die kleinste Y-Stelle ist an der %i. stelle und lautet: %i\n", kleinste_pos, min);

    
    kleinste_pos = 1;
    int minx;
    int miny;

    for (int i = 0; i < 50; i++){
        if (list[i].x + list[i].y < list[kleinste_pos].x + list[kleinste_pos].y){
            kleinste_pos = i;
            minx = list[kleinste_pos].x;
            miny = list[kleinste_pos].y;
        }
    }
    printf("Der kleinste Punkt ist an der Stelle %i und lautet: {%i, %i}", kleinste_pos, minx, miny);
    return 0;
}