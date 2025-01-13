#include "Elf.h"

Elf::Elf(const std::string &name, int health, int arrows) :Character(name, health), arrows(arrows) {};

int Elf::getArrows() const {
  return arrows;
};

void Elf::applyWeapon(hfu::Character& character) {
  if (isAlive() && character.isAlive() && this!=&character && arrows!=0) {
    std::cout << this->getName() << " Schießt mit dem Bogen auf " << character.getName() << "!\n";
    character.hit(2); // Axtschlag reduziert Lebenspunkte um 2
    arrows--;
  }

  if (arrows==0) {
    std::cout << this->getName() << " Hat keine Pfeile mehr!" << std::endl;
  }
}