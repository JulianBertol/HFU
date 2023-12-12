#include <stdio.h>
#include <stdlib.h>

#define MAX_LENGTH 100

struct Stack
{
    char stack[MAX_LENGTH];
    int top;
};

Stack s;

void push(char c){
    if (s.top < MAX_LENGTH){
        s.top++;
        s.stack[s.top] = c;
    }else{
        printf("Der Stapel ist voll");
    }
}

char pop(){
    if (s.top == 0){
        printf("Der Stapel ist leer");
        
    }else{
        return s.stack[s.top--];
    }
    return ' ';
}

char top(){
    if (s.top == 0){
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
    if (s.top == 0){
        return true;
    }
    return false;
}

void clear(){
    s.top = 0;
}

int main(){
    clear();
    char c = 's';
    push(c);
    printf("added: %c\n", s.stack[s.top]);
    //printf("removed: %c\n", pop() );
    printf("on Top = %c \n",top());
    printf("Size: %i \n", size());
    printf("empty? %i \n", empty());
    return 0;
}