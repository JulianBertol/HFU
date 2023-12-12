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
    }else if(top() == '}'){
        pop();
        if(top() == '{'){
            checked = true;
            pop();
            check();
        }
        printf("Inkorrekte Zeichenkette");
    }else if(top() == ']'){
        pop();
        if(top() == '['){
            checked = true;
            pop();
            check();
        }
        printf("Inkorrekte Zeichenkette");
    }

}

}

int main(){
    char string[MAX_LENGTH];
    printf("Enter a string: \n");
    fgets(string, MAX_LENGTH - 1, stdin);
    clear();
    for (int i = 0; string[i] != '\0'; i++){
        if (string[i] == '\n') { //fgets macht ein \n an das ende deshalb das hier
        string[i] = '\0';
        break;
    }
        push(string[i]);
    }

    check();
    return 0;
}