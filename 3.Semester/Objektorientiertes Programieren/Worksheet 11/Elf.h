
#ifndef ELF_H
#define ELF_H
#include "Character.h"


class Elf : public hfu::Character{
    private:
        int arrows;
    public:
        Elf(const std::string& name, int health, int arrows);
        int getArrows() const;
        void applyWeapon(Character& character) override;
};



#endif //ELF_H
