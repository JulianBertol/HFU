#include <iostream>
#include <cassert>

bool toInt(char c, int &theInt) {
    if (c >= '0' && c <= '9') {
        theInt = c - '0';
        return true;
    } else {
        return false;
    }
}


int decode(const std::string &line) {
    int firstnumber = 0, lastnumber = 0, digit = 0;
    bool found = false;
    for (int i = 0; line[i] != '\0'; ++i) {
        if (toInt(line[i], digit)) {
            if (!found) {
                firstnumber = digit;
                found = true;
            }
            lastnumber = digit;
        }
    }

    if (!found)
        throw std::invalid_argument("Invalid input");

    return firstnumber * 10 + lastnumber;
}


int main() {

    std::cout << "Starting program..." << std::endl;

    std::string lines[] = {
        "1abc2",
        "pqr3stu8vwx",
        "a1b2c3d4e5f",
        "treb7uchet"
        };
    int expected[]{12,38,15,77};
    for (int i = 0; i < 4; ++i) {
        assert(decode(lines[i])==expected[i]);
    }
    try {
        decode("no digit");
        assert(false);
    }catch (std::invalid_argument&) {
    }

    std::cout << "End of program." << std::endl;
    return 0;
}
