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
    int temp;
    int result = 0;
    for (int i = 0; line[i] != '\0'; ++i) {
        if (toInt(line[i], &temp)) {
            result = result * 10 + temp;
        }
    }
    return result;
}

int main() {
    std::cout << "Starting ..." << std::endl;
    assert(decode("1xyz2") == 12);
    assert(decode("abc3pqr8ijk") == 38);
    assert(decode("x1y2z3v4w5q") == 12345);
    assert(decode("hello7world") == 7);
    std::cout << "Finished ..." << std::endl;
    return 0;
}
