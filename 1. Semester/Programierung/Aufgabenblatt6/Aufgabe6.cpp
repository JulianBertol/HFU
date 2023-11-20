#include <stdlib.h>
#include <stdio.h>
#include <cmath>

void zp(int a, int b){
    //Abfragen ob die eingegebenen Zahlen sinn machen.
    if (a < 0 || b < 0){
        printf("Gib Zahlen an, die <= 0 sind.\n");
    }
    else if(a > b){
        printf("Die erste Zahl muss kleiner sein als die 2. Zahl. \n");
    }

    int rechnung = 1;
    do
    {
        rechnung ++;
    } while (pow(2,rechnung) <= a);

    int zahl = rechnung;

    while (rechnung <=b)
    {
        printf("%i \n", rechnung);
        rechnung = pow(2,zahl);
        zahl++;
    }
    
    
}

int main(){
int a;
int b;
printf("Geben sie die Zahl für a an: \n");
scanf("%i", &a);
printf("Geben sie die Zahl für b an: \n");
scanf("%i", &b);
zp(a,b);
}