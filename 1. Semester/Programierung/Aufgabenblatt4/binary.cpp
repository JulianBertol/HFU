#include <iostream>

int main (){
    int eingabe; //Variable für Eingabe des Users
    int rechnung; // wird später /2 gerechnet
    int rest; //Der rest der Rechnung

    printf("Geben sie eine ganzzahlige Zahl ein!: \n");
    scanf("%i", &eingabe);

    if (eingabe <0 ){
        printf("Du hast eine negative Zahl eingeben!");
    }else{
        do{
            //in Binär umrechnen
            rest = eingabe % 2;
            rechnung = eingabe / 2;
            eingabe = rechnung;
            printf("%i", rest); //rückwärtsaufschreiben
        }while(rechnung > 0);
    }

    return 0;
}