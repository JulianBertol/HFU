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

bool checked = false;
void check(){
if (empty() && checked){
    printf("Korrekte Zeichenkette");
    exit(EXIT_SUCCESS);
}else if(empty() && !checked){
    printf("Inkorrekte Zeichenkette");
    exit(EXIT_SUCCESS);
}


if(top() == ')' || top() == '}' || top() == ']'){
    if(top() == ')'){
        pop();
        if (top() == '('){
            checked = true;
            pop();
            check();
        }
        printf("Inkorrekte Zeichenkette");
        exit(EXIT_SUCCESS);
    }else if(top() == '}'){
        pop();
        if(top() == '{'){
            checked = true;
            pop();
            check();
        }
        printf("Inkorrekte Zeichenkette");
        exit(EXIT_SUCCESS);
    }else if(top() == ']'){
        pop();
        if(top() == '['){
            checked = true;
            pop();
            check();
        }
        printf("Inkorrekte Zeichenkette");
        exit(EXIT_SUCCESS);
    }

}else{
    printf("Inkorrekte Zeichenkette!");
    exit(EXIT_SUCCESS);
}

}