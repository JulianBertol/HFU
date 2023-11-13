#include <iostream>

int main (){
    int zahl_unter_wurzel;
    double naeherung_a;
    double naeherung_b;
    double break_while;
    printf("Geben sie eine Zahl ein die sie berechnen wollen: \n");
    scanf("%i", &zahl_unter_wurzel);
    naeherung_a = zahl_unter_wurzel * 0.5;
//for Schleife
/*
for (int i = 1; i != 10; i++){
    naeherung_b = zahl_unter_wurzel / naeherung_a;
    naeherung_a = (naeherung_a + naeherung_b) /2;
    printf("%lf \n", naeherung_a);
}
*/
//do-while Schleife
do{
    naeherung_b = zahl_unter_wurzel / naeherung_a;
    naeherung_a = (naeherung_a + naeherung_b) /2;
    break_while = naeherung_a - naeherung_b;
    printf("%lf \n", naeherung_a);
}
while(break_while < 0.000001);
    printf("Das Ergebniss aus der Wurzel von %i ist: %lf",zahl_unter_wurzel, naeherung_a);
}