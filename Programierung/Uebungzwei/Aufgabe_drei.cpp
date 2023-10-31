#include <stdio.h>

int main(){
int i;
long ell;
float f;
double d;
//Zeile 1
d = 100/3;
printf("in Zeile 1 kommt als double raus: %f \n", d);
f = d;
printf("in Zeile 1 kommt als float raus: %f \n", f);
ell = f;
printf("in Zeile 1 kommt als long raus: %lu \n", ell);
i = ell;
printf("in Zeile 1 kommt als integer raus: %i \n", i);

//Zeile 2
printf("\nHier beginnt Zeile 2:\n ------------------------------------------------------------------------------------- \n");
d = 100/3.0;
printf("in Zeile 2 kommt als double raus: %f \n", d);
f = d;
printf("in Zeile 2 kommt als float raus: %f \n", f);
ell = f;
printf("in Zeile 2 kommt als long raus: %lu \n", ell);
i = ell;
printf("in Zeile 2 kommt als integer raus: %i \n", i);

//Zeile 3
printf("\nHier beginnt Zeile 3:\n ------------------------------------------------------------------------------------- \n");
d = (float)100/3;
printf("in Zeile 3 kommt als double raus: %f \n", d);
f = d;
printf("in Zeile 3 kommt als float raus: %f \n", f);
ell = f;
printf("in Zeile 3 kommt als long raus: %lu \n", ell);
i = ell;
printf("in Zeile 3 kommt als integer raus: %i \n", i);

//Zeile 4
printf("\nHier beginnt Zeile 4:\n ------------------------------------------------------------------------------------- \n");
d = 0.1;
printf("in Zeile 4 kommt als double raus: %f \n", d);
f = d;
printf("in Zeile 4 kommt als float raus: %f \n", f);
ell = f;
printf("in Zeile 4 kommt als long raus: %lu \n", ell);
i = ell;
printf("in Zeile 4 kommt als integer raus: %i \n", i);
};