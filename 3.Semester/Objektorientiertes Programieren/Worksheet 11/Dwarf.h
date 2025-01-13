#ifndef DWARF_H
#define DWARF_H
#include "Character.h"


class Dwarf : public hfu::Character{
    private:
        int axeWeight;

    public:
        Dwarf(const std::string& name, int health, int axeWeight);
        int getAxeweight() const;
        void applyWeapon(Character& character) override;
};



#endif //DWARF_H
