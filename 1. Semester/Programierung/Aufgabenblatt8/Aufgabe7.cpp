#include <stdio.h>

int main(){
    int zahlen[5];
    int i,j;
    for(i = 20; i > 15; i--){
        zahlen[20-i] = i % 3;
        printf("1. Schleife: %i \n", zahlen[20-i]);
    }
    for (i = 0; i < 5; i++){
        for (j = 5; j > 0; j = j - 2){
            zahlen[5-j] = zahlen[i / 2] + zahlen[j - 1];
            printf("2. Schleife: %i\n", zahlen[5-j]);
        }
    }
    return 0;
}