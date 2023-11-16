#include <iostream>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void){
    const int laenge = 100;
    char liste1 [laenge];
    char liste2 [laenge];
    char ges [laenge * 2];
    int count_ges = 0;

printf("Geben sie eine Zeichenkette ein! \n");
fgets(liste1, laenge - 1, stdin);
printf("Geben sie eine 2. Zahl ein: \n");
fgets(liste2, laenge - 1, stdin);

printf("selber zusammengefügte variante: ");

for(int i = 0; strlen(liste1)  > i; i++){
    ges[count_ges] = liste1 [i];
    count_ges++;
}

for(int i = 0; strlen(liste2) > i; i++){
    ges[count_ges] = liste2 [i];
    count_ges ++;
}

int list_ges_laenge = strlen(liste1) + strlen(liste2);

for(int i = 0; list_ges_laenge > i; i++){
    printf("%c", ges[i]);
}

printf("\n");

printf("Zussamengefügt mit strcat %s \n", strcat(liste1, liste2));
}