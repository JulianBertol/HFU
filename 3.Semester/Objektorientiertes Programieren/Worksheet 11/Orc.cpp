#include "Orc.h"

Orc::Orc(const std::string &name, int health, int swordLength) : Character(name, health), swordlength(swordLength) {}

int Orc::getSwordLength() const {
    return swordlength;
}

void Orc::applyWeapon(Character &character) {
    if (isAlive() && character.isAlive() && this != &character) {
        std::cout << this->getName() << " schlägt mit der Axt " << character.getName() << "!\n";
        character.hit(3);
    }
}
