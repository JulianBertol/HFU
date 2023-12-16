#include "stack.h"
#include <stdio.h>
#include <stdlib.h>

#define MAX_LENGTH 100

struct Stack
{
    char stack[MAX_LENGTH];
    int top;
};

Stack s;

void clear(){
s.top = -1;
}

void push(char c){
    if (s.top < MAX_LENGTH){
        s.top++;
        s.stack[s.top] = c;
    }else{
        printf("Der Stapel ist voll");
    }
}

char pop(){
    if (s.top == -1){
        printf("Der Stapel ist leer");
        
    }else{
        return s.stack[s.top--];
    }
    return ' ';
}


char top(){
    if (s.top == -1){
        printf("Der Stapel ist leer");
    }else{
        return s.stack[s.top];
    }
    return ' ';
}

unsigned int size(){
    return s.top;
}

bool empty(){
    if (s.top == -1){
        return true;
    }
    return false;
}


void check(const char *input_string)
{
    clear();

    for (int i = 0; input_string[i] != '\0'; i++)
    {
        char current_char = input_string[i];

        if (current_char == '(' || current_char == '[' || current_char == '{')
        {
            push(current_char);
        }
        else if (current_char == ')' || current_char == ']' || current_char == '}')
        {
            if (empty())
            {
                printf("Fehler: Schließende Klammer ohne entsprechende öffnende Klammer.\n");
                return;
            }

            char last_opening_bracket = pop();

            if ((current_char == ')' && last_opening_bracket != '(') ||
                (current_char == ']' && last_opening_bracket != '[') ||
                (current_char == '}' && last_opening_bracket != '{'))
            {
                printf("Fehler: Klammerung ist nicht korrekt.\n");
                return;
            }
        }
    }

    if (!empty())
    {
        printf("Fehler: Es gibt nicht geschlossene Klammern.\n");
        return;
    }

    printf("Die Klammerung ist korrekt.\n");
}