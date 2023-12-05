#include <stdio.h>

struct Vektor
{
    float x, y;
};


float skalarProdukt(const Vektor &a, const Vektor &b){
return (a.x + a.y) * (b.x + b.y);
}

Vektor vektorSumme(const Vektor &a, const Vektor &b){
    Vektor summe;
    summe.x = a.x + b.x;
    summe.y = a.y + b.y;
    return summe;
}

Vektor vektorkreuzprodukt(const Vektor &a, const Vektor &b){
    Vektor kreuzprodukt;
    kreuzprodukt.x = a.x * b.y;
    kreuzprodukt.y = a.y * b.x;
    return kreuzprodukt;
}

Vektor skallierterVektor(float faktor, const Vektor &x){
    Vektor ergebnis;
    ergebnis.x = faktor * x.x;
    return ergebnis;
}

int main(){
float x1, x2, y1, y2, multi;
printf("Gib den X-Wert für den 1. Vektor an: \n");
scanf("%f", &x1);
printf("Gib den Y-Wert für den 1. Vektor an: \n");
scanf("%f", &y1);
printf("Gib den X-Wert für den 2. Vektor an: \n");
scanf("%f", &x2);
printf("Gib den Y-wert für den 2. Vektor an: \n");
scanf("%f", &y2);
printf("Geben sie einen Multiplikator für dem skalliertenVektor an: \n");
scanf("%f", &multi);
printf("Deine Eingabe lautet: \n X1 = %f \n Y1 = %f \n X2 = %f \n Y2 = %f \n Multiplikator: %f\n", x1, y1, x2, y2, multi);

Vektor a = {x1, y1};
Vektor *pa = &a;
Vektor b = {x2, y2};
Vektor *pb = &b;
Vektor ab = {a.x + b.x + a.y + b.y};
Vektor *pab = &ab;

printf("Das produkt der Vektorten lautet: %f \n", skalarProdukt(*pa, *pb));
Vektor summe = vektorSumme(*pa, *pb);
printf("Die Summe der Vektoren lautet: %f \n", summe.x + summe.y);
Vektor kreuzprodukt = vektorkreuzprodukt(*pa, *pb);
printf("Das Kreuzprodukt lautet: %f\n", kreuzprodukt.x - kreuzprodukt.y);
Vektor skalliert = skallierterVektor(multi,*pab);
printf("Der skallierteVektor lautet: %f", skalliert.x);
return 0;
}