#include <stdio.h>
#include <stdlib.h>

int berechne(char op, int v1, int v2){
    int rechnung;
    switch (op)
    {
    case 'x':
        rechnung = v1 * v2;
        break;

    case '+':
        rechnung = v1 + v2;
        break;

    case '-':
        rechnung = v1 - v2;
        break;

    case '/':
        rechnung = v1 / v2;
        break;
    
    default:
        rechnung = -999;
        break;
    }

    return rechnung;
}

int main (int argc, char* argv[]){
    argc --;
    if (argc == 0){
        printf("Du hast nicht Uebergeben!\n");
        return 0;
    }
    if (argc > 3){
        printf("Du hast zu viel eingegeben! \n");
    }else if (argc < 3 ){
        printf("Du hast zu wenig eingegeben!\n");
    }else if(!atoi(argv[2]) || !atoi(argv[3])){
        printf("Du hast keine Zahl eingegeben!\n");
    }
    else{
    printf("Operator: %c \n", *argv[1]);
    printf("erster int: %i\n", atoi(argv[2]));
    printf("zweiter int: %i\n", atoi(argv[3]));
    printf("%i \n", berechne(*argv[1], atoi(argv[2]), atoi(argv[3])));
    }
    
    printf("Press Enter to leave");
    scanf("%C");
    return 0;
}