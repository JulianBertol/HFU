#include<stdio.h>
#include<stdlib.h>

void dreh (const char* s){
    int laenge = 0;
    do
    {
        laenge++;
        s++;
    } while (*s != '\0');

    for (int i = laenge; i >= 0; i--){
        printf("%c", *s);
        s--;
    }
    
}

int main(){
const int laenge = 100;
char list[laenge];
printf("Geben sie ein String ein: \n");
fgets(list, laenge - 1, stdin);
dreh(list);
}