#include <stdio.h>

int main(){
//Aufgabe 4
int x = 10;
int n = 3;
int j = x << n;
printf("Das ergebniss von j ist : %i", j); // bedeutet -> 10 * 2³

//Aufgabe 5
printf("Die Speicherplatzgrößen betragen: \n");
printf("von Char: %i Bytes\n", sizeof(char));
printf("von short: %i Bytes\n", sizeof(short));
printf("von int: %i Bytes\n", sizeof(int));
printf("von long: %i Bytes\n", sizeof(long));
printf("von long long: %i Bytes\n", sizeof(long long));
printf("von float: %i Bytes\n", sizeof(float));
printf("von double: %i Bytes\n", sizeof(double));
printf("von long double: %i Bytes\n", sizeof(long double));
printf("von bool: %i Bytes\n", sizeof(bool));
};