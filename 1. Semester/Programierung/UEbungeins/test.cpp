#include <stdio.h>
#include <stdlib.h>

int main (int argc, char * argv[]){
    int Liste [40];
    int Minimum;
    int i;

    //Fuellen der Liste mit zufälligen Zahlen
    for (i = 0; i <40; i++){
        Liste[i] = rand();
    }

    //bislang das kleinste Element
    Minimum = Liste[0];


    //Kleinste Element in der Liste suchen
    for(i=1; i<55; i++){
        if (Liste[i] < Minimum ) {
        Minimum = Liste[i];
        }
        printf("%i ", Liste[i]);
    }



    //Ausgabe des ergebnisses Maximum
    printf("Das Maximum von ");
    for (i = 0; i<40; i++){
        printf("%i ", Liste[i++]);
    }

    printf("ist :\n%i\n", Minimum);
    return 0;
}

/*Was passiert, wenn Sie das 55. Element einer Liste mit 40 Elementen
ausgeben?
Eine zufällige Negative Zahl wird ausgegeben*/