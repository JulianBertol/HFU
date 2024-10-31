#include "Position.h"
#include <iostream>
#include <cassert>

void sort(hfu::Position* positions, const int size) {
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

void test_sort(hfu::Position* positions, const int size) {
    sort (positions, size);
    for (int i = 1; i < size; i++) {
        assert(positions[i - 1].compare(positions[i]) == -1);
    }
}

void fill_test_sort() {
    hfu::Position positions[5] = {
        hfu::Position("Mordor", 1, 2),
        hfu::Position("Zordor", 7, 8),
        hfu::Position("Ardor", 10, 12),
        hfu::Position("Bordor", 0, 5),
        hfu::Position("Julian", 3, 4)
    };
    test_sort(positions, 5);
}

int main() {
    std::cout << "Starting Programm ..." << std::endl;
    fill_test_sort();
    std::cout << "End of Programm ..." << std::endl;
}