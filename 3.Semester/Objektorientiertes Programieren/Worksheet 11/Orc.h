#ifndef ORC_H
#define ORC_H
#include <iostream>
#include "Character.h"

class Orc : public hfu::Character{
    private:
        int swordlength;
    public:
        Orc(const std::string& name, int health, int swordLength);
        int getSwordLength() const;
        void applyWeapon(Character& character) override;
};



#endif //ORC_H
