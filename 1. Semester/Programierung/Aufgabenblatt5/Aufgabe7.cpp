#include <iostream>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main (){
    char vokale[] = {'a','e','i','o','u'};
    const int laenge = 20;
    char eingabe[laenge]; // Eingabe des Benutzers 
    char neue_eingabe[laenge]; // Array ohne Vokale
    int count = 0; 
    printf("Geben Sie eine Zeichenkette ein: \n");
    fgets(eingabe, laenge - 1, stdin);

    for(int i = 0; i < strlen(eingabe) - 1; i++){
        bool isVokal = false;
        for (int c = 0; c < strlen(vokale); c++){
            if (eingabe[i] == vokale[c]){
                isVokal = true;
                break;
            }
        }
        if(!isVokal){
            neue_eingabe[count] = eingabe[i];
            count++;
        }
    }

    for (int i = 0; i < count; i++){
        printf("%c", neue_eingabe[i]);
    }
    printf("\n");
}
