#include <iostream>

int main (){
    int zahl_unter_wurzel;
    double naeherung_a;
    double naeherung_b;
    printf("Geben sie eine Zahl ein die sie berechnen wollen: \n");
    scanf("%i", &zahl_unter_wurzel);
    naeherung_a = zahl_unter_wurzel * 0.5;
for (int i = 1; i != 10; i++){
    naeherung_b = zahl_unter_wurzel / naeherung_a;
    naeherung_a = (naeherung_a + naeherung_b) /2;
}
    printf("Das Ergebniss aus der Wurzel von %i ist: %lf",zahl_unter_wurzel, naeherung_a);
}