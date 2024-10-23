#include "Position.h"
#include <iostream>
#include <cassert>

void sort(hfu::Position* positions, int size) {
    for (int i = 1; i < size; ++i) {
        hfu::Position key = positions[i];
        int j = i - 1;

        // Vergleicht Position mit compare
        while (j >= 0 && positions[j].compare(key) > 0) {
            positions[j + 1] = positions[j];
            j = j - 1;
        }
        positions[j + 1] = key;
    }
}

int main() {
    std::cout << "Starting Programm ..." << std::endl;

    hfu::Position positions[] = {
        hfu::Position("Mordor", 47, 11),
        hfu::Position("Zordor", 48, 12),
        hfu::Position("Ardor", 46, 10),
        hfu::Position("Bordor", 47, 15)
    };

    int size = std::size(positions); //falls nicht erlaubt mit sizeof auch möglich
                                     //sizeof(postion) / sizeof(position[0]) -> rechnet mit den bytes

    // Sortiere das Array von Positionen
    sort(positions, size);

    assert(positions[0].getName() == "Ardor");
    assert(positions[1].getName() == "Bordor");
    assert(positions[2].getName() == "Mordor");
    assert(positions[3].getName() == "Zordor");

    for (int i = 0; i < size; ++i) {
        std::cout << positions[i].getName() << std::endl;
    }

    std::cout << "End of Programm ..." << std::endl;
}