#include <assert.h>
#include <iostream>

bool toInt(char c, int *theInt) {
    if (c >= '0' && c <= '9') {
        *theInt = c - '0';
        return true;
    } else {
        return false;
    }
}

int decode(const char *line) {
    int firstnumber = 0, lastnumber = 0, digit = 0;
    bool found = false;
    for (int i = 0; line[i] != '\0'; ++i) {
        if (toInt(line[i], &digit)) {
            if (!found) {
                firstnumber = digit;
                found = true;
            }else
                lastnumber = digit;
        }
    }

    if (!found)
        throw std::invalid_argument("Invalid input");
    if (!lastnumber)
        return firstnumber;

    return firstnumber * 10 + lastnumber;
}


int main() {
    std::cout << "Starting ..." << std::endl;
    assert(decode("1xyz2") == 12);
    assert(decode("abc3pqr8ijk") == 38);
    assert(decode("x1y2z3v4w5q") == 15);
    assert(decode("hello7world") == 7);
    std::cout << "Finished ..." << std::endl;
    return 0;
}
