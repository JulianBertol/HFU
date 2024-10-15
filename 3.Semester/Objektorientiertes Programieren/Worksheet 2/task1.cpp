#include <iostream>
#include <cassert>

bool toInt(char c, int &theInt) { //Pointer zu einer referenz geändert
    if (c >= '0' && c <= '9') {
        theInt = c - '0';
        return true;
    } else {
        return false;
    }
}

int main() {
    std::cout << "Starting program..." << std::endl;

    int number=-1;
    toInt('0',number);
    assert(number==0);
    number=-1;
    toInt('9',number);
    assert(number==9);
    number=-1;
    toInt('x',number);
    assert(number==-1);

    std::cout << "End of program." << std::endl;

    return 0;
}