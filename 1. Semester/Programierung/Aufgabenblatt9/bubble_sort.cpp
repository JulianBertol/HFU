#include <stdio.h>
#include <stdlib.h>

void sort(int *a, unsigned int n){
    for(int i = 0; i < n-1; i++){
        for(int j = 0;j < n - 1 - i; j++){
            int *pa = a + j;
            int *pb = a + j + 1;
            if(*pa > *pb){
                int temp = *pa;
                *pa = *pb;
                *pb = temp;
            }
        }
    }
}

int main(){
    int array[] = {15, 7, 13, 24 ,9, 25};
    sort(&array[0], 6);
    for (int i = 0; i < 6; i++){
        printf("array %i = %i\n", i, array[i]);
    }
    return 0;
}