#include <assert.h>
#include <iostream>

//checkt die länge ob position bei 0 oder 1 beginnt, da logik rückwärts zählt
int check_length(int number) {
    int count = 0;
    while (number > 0) {
        number = number / 10;
        count++;
    }

    if (count % 2 == 0) {
        return 1;
    }
    return 0;
}

int checksum(int number) {
    if (number < 0) {
        throw std::invalid_argument("Number must not be negative"); //Zahl darf nicht negativ sein
    }

    int position = 0;
    int sum = 0;

    if (check_length(number)) {
        position = 1;
    }else {
        position = 0;
    }

    while (number > 0 ) {
        int remainder = number % 10;
        if (position % 2 == 0) {
            sum += remainder;
        }else {
            sum -= remainder;
        }
        number = number / 10;
        position++;
    }
    return sum;
}

int main() {
    std::cout << "starting ..." << std::endl;
    assert(checksum(471) == -2);
    assert(checksum(4711) == -3);
    assert(checksum(0) == 0);
    std::cout << "ending ..." << std::endl;
    return 0;
}