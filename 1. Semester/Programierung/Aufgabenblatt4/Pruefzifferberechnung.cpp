#include <iostream>

int main (){
    const int max_array = 14; //14, da das letzte objekt in arrys \0 ist.
    char number [max_array] = {9,7,8,3,4,4,6,4,6,4,7,0,4};
    int ergebnis = 0;
    for (int i = 0; i < max_array - 1; i = i + 2){
        ergebnis += (1 * number[i]) + (number[i+1] * 3);
    }
    printf("Die Zahl: ");
    //schleife für ausgabe
    for (int i = 0; i < max_array - 1; i++){
        printf("%d", number[i]);
    }
    if (ergebnis%10 == 0 ){
        printf(" ist korrekt");
    }else{
        printf("ist nicht korrekt");
    }

    return 0;
}