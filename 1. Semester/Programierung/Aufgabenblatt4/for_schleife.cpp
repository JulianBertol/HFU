#include <iostream>
int main (){
    printf("Diese Schleife zählt von 0 bis 9: \n");
    for (int zaehler = 0; zaehler !=10; zaehler = zaehler + 1){
        //zählt solange +1 auf die Variable Zaehler bis Zaehler = 10 ist. In dem Fall von 0 bis 9.
        printf("%i \n", zaehler);
    }

    printf("Diese Schleife zählt von 10 bis 1 \n");
    for (int n = 10; n > 0; n = n - 1){
        //Zählt die Variable n von 10 immer Minus 1 runter solange n größer als 0 ist. In dem Fall von 10 bis 1
        printf("%i \n", n);
    }


    printf("Diese schleife Zählt von 1 bis 13:\n");
    for (int x = 1; x <= 15; x = x + 3){
        //Zählt die Variable x von 1 immer +3 solange wie x kleiner oder gleich 15 ist. Wenn also x Größer oder gleich 15 ist bricht die schleife ab. In dem Fall von 1 bis 13
        printf("%i \n", x);
    }

    printf("Hier würde eine Endlose Schleife kommen \n");
    /*for (int x = 1; x != 15; x = x + 3){
        //Zählt die variable x immer um +3 hoch solange 1 ungleich 15 ist. Diese Schleife ist eine Endlose Schleife
        printf("%i \n", x);
    }
    */

   printf("Diese Schleife beginnt nie \n");
   for (int x = 1; x == 15; x = x + 3){
    //Zählt die variable x von 1 immer +3 solange die Variable x = 15. Diese Schleife wird nie ausgeführt, da die Variable x zu beginn der Schleife nicht 15 ist und somit die Schleife nie beginnt. 
    printf("%i\n", x);
   }

    printf("Diese Schleife Zählt von 5 bis 9 in 2er Schritten: \n");
   for (char c = '5'; c <= '9'; c = c + 2){
    //Diese Schleife Zählt von 5 immer +2 Solange die Variable C kleiner oder gleich 9 ist. In diesem Fall (5,7,9)
    printf("%c\n", c);
   }


}