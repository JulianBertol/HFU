#include <assert.h>
#include <iostream>
bool toInt(char c, int *theInt) {
    if (c >= '0' && c <= '9'){ // Ascii Werte
        *theInt = c - '0'; // Wenn man den wert von '0' abzieht bekommt man int
        return true;
    }else {
        return false;
    }
}
int main() {
    std::cout << "starting ..." << std::endl;
    int testchar = '5';
    int result;

    assert(toInt(testchar, &result) == true && result == 5);
    assert(toInt('c', &result) == false);
    assert(toInt('0', &result) == true && result == 0);
    assert(toInt('1', &result) == true && result == 1);
    assert(toInt('h', &result) == false);


    std::cout << "ending ..." << std::endl;
    return 0;
}