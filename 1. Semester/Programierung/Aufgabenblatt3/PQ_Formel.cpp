#include<stdio.h>
#include<math.h>

int main(){
    double p;
    double q;
    double rechnung_pos; //Rechnung für x1
    double rechnung_neg; //Rechnung für x2
    double rechnung_ges; //Berechnungen die beide brauchen

    printf("Zahl für p eingeben: \n");
    scanf("%lf", &p);
    printf("Zahl fpr q eingeben: \n");
    scanf("%lf", &q);

    printf("p = %lf\n q = %lf\n", p,q);
    rechnung_ges = (p/2)*(p/2)-q;
    if (rechnung_ges >= 0){
        rechnung_pos = -p/2 + sqrt(rechnung_ges);
        rechnung_neg = -p/2 - sqrt(rechnung_ges);
        printf("X1 = %lf\n", rechnung_pos);
        printf("X2 = %lf",rechnung_neg);
    }
    else{
        printf("Rechung nicht möglich, da die wurzel negativ ist (%lf)", rechnung_ges);
    };
    return 0;
    }