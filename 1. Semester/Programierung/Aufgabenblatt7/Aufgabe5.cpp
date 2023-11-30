#include <stdlib.h>
#include <stdio.h>
#include <ctype.h>

void stat(const char* s){
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
    printf("Anzahl der Zeichen = %i\n", character);

    s = s -character;

    int words = 0;
    while(*s != '\0')
    {
        if (isspace(*s)){
        while (isspace(*s))
        {
            s++;
        }
        words++;
        }
        s++;
    }
    printf("Anzahl der Worte = %i\n", words);
}

int main(){
    const int length = 100;
    char list [length];
    printf("Geben sie eine Zeichenkette ein:\n");
    fgets(list,length - 1, stdin);
    stat(list);
    return 0;
}