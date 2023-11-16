#include <iostream>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(){
    bool stop = false;
    int i = 0;
    int count = 0;
    char kette [] = "Hallo Welt";
    do {
        if(kette[i] == '\0'){
            stop = true;
        }else{
            i = i + 1;
            count = count + 1;
        }
    }while (stop == false);
    printf("Selstberechnet: %i \n", count);
    int strlaenge = strlen(kette);
    printf("kette aus strlen: %i", strlaenge);



    //Aufgabe 5
    const int laenge_der_kette = 100;
    char arr1 [laenge_der_kette];
    char arr2 [laenge_der_kette];
    bool gleich = true;
    printf("Geben sie eine Zeichenkette ein: \n");
    fgets(arr1 ,99 , stdin);
    printf("Geben sie eine 2. Zeichenkette ein: \n");
    fgets(arr2 ,99 , stdin);


    if (strlen(arr1) == strlen(arr2)){
        for (int i = 0; laenge_der_kette > i; i++){
            if(arr1[i] != arr2[i]){
                gleich = false;
                break;
            }else{
                gleich = true;
                break;
            }
        }
    }else{
        gleich = false;
    }

    if (gleich == true){
        printf("Die ketten sind gleich");
    }else{
        printf("Die ketten sind ungleich");
    }

}
