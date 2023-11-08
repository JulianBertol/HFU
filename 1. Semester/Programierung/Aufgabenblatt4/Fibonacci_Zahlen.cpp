#include <iostream>

int main (){
int fk1 = 1;
int fk2 = 1;
double schnitt;

for (int i = 3; i != 21; i++){
    int fk = fk1 + fk2;
    schnitt =  static_cast<double>(fk1) / fk2 + 1;
    printf("f(%i)=%i Schnitt = %lf \n", i, fk, schnitt);
    fk1 = fk2;
    fk2 = fk;
}

}