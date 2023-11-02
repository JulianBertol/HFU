#include<stdio.h>
#include<iostream>
#include<bitset>
#include<string>

int main(int argc, char** argv){
    //Aufgabe 1
    unsigned int jahr = 2004;
    if(jahr % 4 == 0 ){
        printf("Das Jahr %u ist ein Schaltjahr!\n", jahr);
    }
    else{
        printf("Das Jahr %u ist _kein_ Schaltjahr!\n", jahr);
    }

    //Aufgabe 2
    //255 = 8 bits
    int i;
    const int b = 8;
    i = 200;
    std::string k = std::bitset<b>(i).to_string();
    std::cout << "Die Zahl " << i << " ist binär dargestellt: " << k << std::endl;


    //Aufgabe 3
    int x;
    int f;
    printf("\nGeben sie eine Zahl ein \n");
    scanf("%i", &x);
    //hier code zu berechnung von f
    if (x<0){
        f = -1;
    }else if (x == 0){
        f = 0;
    }else{
        f = 1;
    }
    printf("f(%i)=%i\n",x,f);
    return 0;
}