#include <iostream>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(){
const int laenge = 100;
char eingabe [laenge];
char neue_eingabe [laenge];
int c = 0;
printf("Geben sie eine Zeichenkette ein: \n");
fgets(eingabe, laenge - 1, stdin);

for(int i = strlen(eingabe) - 1; i >= 0; i = i -1){
    neue_eingabe[c] = eingabe[i];
    c++;
}
neue_eingabe[c] = '\0'; 
printf("%s", neue_eingabe);
}