#include <stdio.h>

int main() {
    int x,y;
    printf("\n Etwas Arithmetik ... \n\n");
    printf("\t 1.Zahl eingeben:");
    scanf("%i", &x);
    printf("\t 2.Zahl eingeben:");
    scanf("%i", &y);
    printf("\n");
    printf("\t %i + %i ist %i\n", x,y,x+y);
    printf("\t %i - %i ist %i\n", x,y,x-y);
    printf("\t %i * %i ist %i\n", x,y,x*y);
    printf("\t %i / %i ist %i\n", x,y,x/y);
    printf("\t %i %% %i ist %i\n", x,y,x%y);
    return 0;
}

//Es wird ein flasches Ergebnis angezeigt, da der integer nur zahlen bis zu einem wert von -2147483648 bis 2147483647 speichern kann.
