#include <iostream>

int main (){
    int zeile, spalte;
    for (zeile = 20; zeile >= 1; zeile = zeile - 1){ //Default: (zeile =1; zeile <= 20; zeile = zeile +1;)
        for (spalte = 1; spalte<=zeile; spalte = spalte + 1){
        printf("*");
        }
        printf("\n");
    }
}