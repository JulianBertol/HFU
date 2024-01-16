#include <cstdio>
#include <stdlib.h>
#include <time.h>

/*int main(){ 
    srand(time(0));
    int array[10];
    int hallo = 2;
    for(int i = 1; i < 100; i++){
    int temp = rand() % 10;
    printf("%i \n", temp);
    }
    return 0;
}*/

//2a)
/*
int main(){
    char array[] = "Hallo";
    int count = 0;

    for(int i = 0; array[i] != '\0'; i++){
        count ++;
    }

    printf("%i", count);
    return 0;
}
*/

//2 b)
/*
bool schaltjahr(unsigned int year){
    bool isLeapYear = false;
    if(year % 4 == 0 && year % 100 != 0 || year % 400 == 0){
        isLeapYear = true;
    }
    return isLeapYear;
}

int main(){
    printf("%i", schaltjahr(2004));
}
*/

//2c)
/*
void tolower(char *string){
    char lower[26];
    char upper[26];

    for (int i = 0; i < 26; i++){
        lower[i] = 'a' + i;
    }

    for (int i = 0; i < 26; i++){
        upper[i] = 'A' + i;
    }

    bool match = false;
    while (*string != '\0'){
        match = false;
        for(int i = 0; i < 26; i++){
            if(*string == upper[i]){
                printf("%c", lower[i]);
                match = true;
                break;
            }
        }
        if(!match){
                printf("%c", *string);
        }
        string++;
    }


}

int main(){
    char input[] = "HaLlo";
    tolower(input);
}
*/

//2d)
/*
#include <math.h>
void exponent(int *x, int y){
    *x = pow(*x,y);
}

int main(){
    int x = 5;
    exponent(&x,3);
    printf("%i", x);
}
*/

//Aufgabe 3

//a
/*
void tausche(int *i, int *j){
    int temp;
    temp = *i;
    *i = *j;
    *j = temp;
}

int main(){
    int i = 10;
    int j = 20;
    tausche(&i, &j);
    printf("i = %i, j = %i", i , j);
}
*/

//b)
/*
void minmax (const int *array, int laenge, int *min, int *max){
    *min = *array;
    *max = *array;
    for(int i = 0; i < laenge; i++){
        if(*min > *array){
            *min = *array;
        }else if(*max < *array){
            *max = *array;
        }
        array++;
    }
}

int main(){
    int min = 0;
    int max = 0;
    int array[] = {1,6,10,20,50,1};
    int laenge = 6;

    minmax(array, laenge, &min, &max);

    printf("Min = %i, Max = %i", min,max);
}
*/

//c)

/*
struct Student
{
    char* Name;
    int Matrikelnummer;
    double Notendurchschnitt;
};

void druckestudent(Student s){
    printf("Name = %s, Matrikelnummer = %i, Notendurchschnitt = %f \n", s.Name, s.Matrikelnummer, s.Notendurchschnitt);
}

void druckestudent_2(Student &s){
    printf("Name = %s, Matrikelnummer = %i, Notendurchschnitt = %f \n", s.Name, s.Matrikelnummer, s.Notendurchschnitt);
}

void druckestudent_3(Student *s){
    printf("Name = %s, Matrikelnummer = %i, Notendurchschnitt = %f \n", s->Name, s->Matrikelnummer, s->Notendurchschnitt);
}

int main(){
    Student s = {"Julian", 275085, 2.52};
    druckestudent(s);
    druckestudent_2(s);
    druckestudent_3(&s);
}
*/