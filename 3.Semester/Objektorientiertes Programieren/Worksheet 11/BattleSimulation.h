#ifndef BATTLESIMULATION_H
#define BATTLESIMULATION_H

#include "Character.h"

void BattleSimulation(std::vector<std::unique_ptr<hfu::Character>>& characters) {
    std::srand(std::time(nullptr)); // Initialisierung des Zufallsgenerators

    while (characters.size() > 1) {
        int attackerIndex = std::rand() % characters.size();
        int defenderIndex = std::rand() % characters.size();


        if (attackerIndex != defenderIndex &&
            characters[attackerIndex]->isAlive() &&
            characters[defenderIndex]->isAlive()) {
            characters[attackerIndex]->applyWeapon(*characters[defenderIndex]);
            }

        // Entfernen der toten Charaktere
        characters.erase(std::remove_if(characters.begin(), characters.end(),
            [](const std::unique_ptr<hfu::Character>& character) {
                return !character->isAlive();
            }),
            characters.end());
    }

    if (!characters.empty()) {
        std::cout << "Der Gewinner ist: " << characters[0]->getName() << "!\n";
    } else {
        std::cout << "Keiner hat überlebt!\n";
    }
}


#endif //BATTLESIMULATION_H
