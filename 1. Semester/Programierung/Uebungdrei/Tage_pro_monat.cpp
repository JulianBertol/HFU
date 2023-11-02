#include <stdio.h>
#include<iostream>
#include <string>

int main (){
unsigned int year;
unsigned int month;
unsigned int days;
std::string name;

printf("Gib die Jahreszahl ein: \n");
scanf("%i", &year);

printf("Gib eine Zahl für den Monat ein: \n");
scanf("%i", &month);


    switch (month)
    {
    case 1:
        name = "Januar";
        days = 31;
        break;

    case 2:
        name = "Februar";
        if (year % 4 == 0){
            days = 29;
        }else
        {
            days = 28;
        }
        break;

    case 3:
        name = "März";
        days = 31;
        break;

    case 4:
        name = "April";
        days = 30;
        break;

    case 5:
        name = "Mai";
        days = 31;
        break;

    case 6:
        name = "Juni";
        days = 30;
        break;

    case 7:
        name = "Juli";
        days = 31;
        break;

    case 8:
        name = "August";
        days = 31;
        break;

    case 9:
        name = "September";
        days = 30;
        break;

    case 10:
        name = "Oktober";
        days = 31;
        break;

    case 11:
        name = "November";
        days = 30;
        break;

    case 12:
        name = "Dezember";
        days = 31;
        break;
    
    default:
        name = "Du hast keinen Gültigen Monat angegeben";
        break;
    }



    if (year >= 0){
        //Abfrage ob das Jahr größer als 0 ist.
        if (month <= 12){
        std::cout << "Der Monat " << name << " hat " << days << " Tage im Jahr: " << year << "." << std::endl;
        }else
        {
        std::cout << name << std::endl;
        }
    }else
    {
        printf("Gib ein Jahr an das Größer als 0 ist!");
    }
}
