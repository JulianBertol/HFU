#include <stdio.h>
#include <stdlib.h>

int vorkommen(const char *s, const char *m){
    int counts = 0;
    int countm = 0;
    const char *ptr1 = s;
    const char *ptr2 = m;


    //Länge des strings s ermitteln
    while (*ptr1 != '\0')
    {
        counts++;
        ptr1++;
    }

    counts--;

    //länge des strings m ermitteln
    while (*ptr2 != '\0'){
        countm++;
        ptr2++;
    }
    countm --;

    int ergebnis = 0;

    for(int i = 0; i <= counts; i++){

        if (s[i] == m[0]){
              //If the character matches, we check for the next
            if(countm == 1){
                ergebnis++;
            }
             for (int x = 1; x <= countm; x++){
                if (s[i + x] != m[x]){
                    break;
                }
                else if( x == countm - 1 ){
                    ergebnis ++;
                    
                }
            }


        }
    }

    return ergebnis;
    
}

int main(){
const int laenge = 100;
char a [laenge];
char b [laenge];
printf("Geben sie den String ein den sie vergleichen wollen: \n");
fgets(a, laenge - 1, stdin);
printf("Geben sie die Buchstaben ein die sie abgleichen wollen: \n");
fgets(b, laenge - 1, stdin);

printf("Die Buchstaben kommen %i mal vor.", vorkommen(a,b));

return 0;
}