#include "stack.cpp"

/*
char pop(){
    if (s.top == -1){
        printf("Der Stapel ist leer");
        
    }else{
        return s.stack[s.top--];
    }
    return ' ';
}

-> Fehler gibt es schon
*/


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

    check(string);
    return 0;
}