#include<stdio.h>
#include<stdlib.h>
#include<iostream>

int main(){
    const int string_laenge = 100;
    char list [string_laenge];
    int count_list = 0;
    printf("Geben sie einen Text ein:");
    fgets(list, string_laenge, stdin);
    printf("Deine Eingabe lautet: %s", list);
    char* string = list;
    do
    {
        count_list++;
        string++;
    } while (*string != '\n');
    printf("%i", count_list);
    
}