#include <stdio.h>
#include <stdlib.h>

int main(){
int fk1 = 1;
int fk2 = 1;
unsigned int *ergebnis;

for (int i = 0; i !=50; i++){
    unsigned int fk = fk1 + fk2;
    fk1 = fk2;
    fk2 = fk;
    ergebnis = &fk;
    printf("%u\n", *ergebnis);
    ergebnis++;

}
}