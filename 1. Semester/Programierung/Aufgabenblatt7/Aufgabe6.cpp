#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>

void stat(const char* s, int* z, int* w){
    int character = 0;
    while (*s != '\0')
    {
        if (isspace(*s)){
            s++;
        }else{
        s++;
        character ++;
        }
    }
    *z = character;

    s = s -character;

    int words = 0;
    while(*s != '\0'){
        if (isspace(*s)){
            words++;
        }
        s++;
    }
    *w = words;
}

int main(){
    const int length = 100;
    char list [length];
    int zeichen, worte;
    printf("Geben sie eine Zeichenkette ein: \n");
    fgets(list, length - 1, stdin);
    stat(list, &zeichen, &worte);
    printf("Anzahl der Zeichen: %i \n",zeichen);
    printf("Anzahl der Worte: %i\n", worte);
    return 0;
}