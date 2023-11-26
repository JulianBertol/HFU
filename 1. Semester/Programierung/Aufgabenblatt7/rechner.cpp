#include <stdio.h>
#include <stdlib.h>

int berechne(char op, int v1, int v2){
int rechnung = 0;
switch (op)
{
case '+':
    rechnung = v1 + v2;
    break;

case '-':
    rechnung = v1 - v2;
    break;

case '*':
    rechnung = v1 * v2;
    break;

case '/':
    if (v1 == 0 || v2 == 0){
        printf("Bei einer division darf kein Wert 0 sein!");
    }
    rechnung = v1 / v2;
    break;

default:
    rechnung = -999;
    break;
}

return rechnung;
}

int main(int argc, char* argv[]){
int aoi(const char* s);
printf("%c \n", aoi);
printf("Druecken sie Enter um das Programm zu schliessen!");
scanf("%c");
return 0;
}