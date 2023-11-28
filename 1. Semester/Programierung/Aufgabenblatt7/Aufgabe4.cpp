#include <stdio.h>
#include <stdlib.h>

bool prim (int x){
    if (x <= 1){
        return false;
    }
    for (int i = 2; i * i <= x; ++i) {
        if (x % i == 0) {
            return false;
        }
    }
    return true;
}

int main(){
    int zahl;
    printf("Geben sie eine Zahl ein die sie überprüfen wollen: \n");
    scanf("%i", &zahl);
    bool isPrim = prim(zahl);
    if (isPrim){
        printf("Die Zahl %i ist eine Primzahl.\n", zahl);
    }else{
        printf("Die Zahl %i ist keine Primzahl. \n", zahl);
    }
    return 0;
}