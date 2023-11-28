#include <stdio.h>
#include <stdlib.h>


long ggt(long x, long y){
long result;
if (x == y){
result = x;
}else if( x > y){
    result = ggt(x-y, y);
}else if (x < y){
    result = ggt(x, y-x);
}


//result2
bool quit = false;
while (quit == false){
    if (x == y){
        result = x;
        quit = true;
    }else if( x > y){
        x = x - y;
    }else if(x < y){
        y = y - x;
    }
}

return result;
}

int main(){
long a, b;
a = 235;
b = 100;
printf("Ergebniss: %ld", ggt(a,b));

return 0;
}