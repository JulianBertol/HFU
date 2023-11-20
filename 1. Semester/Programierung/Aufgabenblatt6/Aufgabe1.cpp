#include <iostream>
#include <stdio.h>
#include <stdlib.h>

int main(){
    int m = 9;
    int n = 10;
    int y;
    int *pm;
    int *pn;
    pn = &n;
    pm = &m;
    y = *pm;
    m = *pn;
    n = y;
    printf("m = %i, n = %i.", m, n);
}