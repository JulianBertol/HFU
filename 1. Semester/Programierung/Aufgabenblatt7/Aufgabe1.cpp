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

int main(){
    char op [1];
    int a;
    int b;
    printf("Geben sie die rechenOperation ein: \n");
    scanf("%c", &op);
    printf("Geben sie die erste Zahl ein: \n");
    scanf("%i", &a);
    printf("Geben sie die zweite Zahl an: \n");
    scanf("%i", &b);
    int rechnung = berechne(op[0],a,b);
    printf("%i", rechnung);
    return 0;
}
