#include <stdio.h>
#include <stdlib.h>

using namespace std;

int main()
{
    //Aufgabe 1
    //Beginn von Aufgabe int n
    printf("Hier beginnt aufgabe int n:");
    int n;
    n =  17-2*7+9%6;
    printf("\n %i", n);

    n = (17-2)*(7+9)%6;
    printf("\n %i", n);

    n = (17-2)*((7+9)%6);
    printf("\n %i", n);

    n =  ((((((17-2)*7)-9)*7)+9)%6); 
    printf("\n %i", n);

    n = 17-(2*(7+(9%6)));
    printf("\n %i", n);

    n = 17/(5/3)*4;
    printf("\n %i", n);

    n = (17/5)*(5/17);
    printf("\n %i", n);

    //beginn von Aufgabe Floatf
    
    printf("\n ab Hier kommt Aufgabe Float f: ");
    
    float f;

    f = 17.0/(5/3)*4;
    printf("\n %f", f);

    f = (17.0/5)*(5/17);
    printf("\n %f", f);

    f = 1*(1.0/3)*3;
    printf("\n %f", f);

    f = 1.5e2*1.5e2;
    printf("\n %f", f);

    f = 1.5e2 * 1.5e-2;
    printf("\n %f", f);

    f = 1.5e-2*1.5e-2;
    printf("\n %f", f);

    //Beginn von Aufgabe char c
    
    printf("\n Ab hier beginnt Aufgabe char c");
    
    char c;

    c = 'a'+5 ;
    printf("\n %c", c);

    c = '0'+9;
    printf("\n %c", c);

    c = '0'+9/2;
    printf("\n %c", c);

    c = '0'+9-2;
    printf("\n %c", c);

    c = '0'+'9';
    printf("\n %c", c);

    //beginn Aufgabe boolb;

    printf("\nhier beginnt Aufgabe bool b");

    bool b;

    c = '5';

    b = (c>='0'&&c<='9');
    printf("\n %d", b);

    b = (c>=0&&c<=9);
    printf("\n %d", b);

    b = (c>='0'||c<='9');
    printf("\n %d", b);

    b = (c>=0||c<=9);
    printf("\n %d", b);

    //Beginn Aufgabe int m

    printf("\n Ab hier beginnt Aufgabe int m: ");

     int m = 44;

     m = 44>>2;
     printf("\n %i", m);

     m = 44<<1;
     printf("\n %i", m);

     m = 1<<10;
     printf("\n %i", m);

     m = 1<<32;
     printf("\n %i", m);
}