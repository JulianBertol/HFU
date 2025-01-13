#include "Character.h"

hfu::Character::Character (std::string name, int health):name(name), health(health) {}

const std::string &hfu::Character::getName() const {
    return name;
}

bool hfu::Character::isAlive() const {
    return health > 0;
}

void hfu::Character::hit(int damage) {
    if (isAlive()) {
        health -= damage;
    }
}