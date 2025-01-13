#include "Dwarf.h"

Dwarf::Dwarf(const std::string &name, int health, int axeWeight) :Character(name, health), axeWeight(axeWeight) {}

int Dwarf::getAxeweight() const {
    return axeWeight;
}

void Dwarf::applyWeapon(hfu::Character& character) {
    if (character.isAlive()) {
        std::cout << this->getName() << " schlägt mit der Axt " << character.getName() << "!\n";
        character.hit(3); // Axtschlag reduziert Lebenspunkte um 3
    }
}