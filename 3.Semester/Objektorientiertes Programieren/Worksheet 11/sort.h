#ifndef SORT_H
#define SORT_H

#include <map>
#include <vector>
#include "Position.h"

void sort_vec(std::vector<hfu::Position>& positions) {
    int keyindex = 0;
    std::map<std::string, hfu::Position> sort;

    // Einfügen der Positionen in die Map
    for (const auto& pos : positions) {
        sort[pos.get_key() + " " +  std::to_string(keyindex)] = pos;  // getKey() in Position | keyindex, damit keine Dubletten entfernt werden
        keyindex++;
    }

    // Leeren des ursprünglichen Vektors
    positions.clear();

    // Kopieren der sortierten Werte aus der Map in den Vektor
    for (const auto& pair : sort) {
        positions.push_back(pair.second);
    }
}

#endif
