#ifndef CHARACKTER_H
#define CHARACKTER_H

#include <iostream>

namespace hfu {
    class Character {
        private:
            std::string name;
            int health;
            bool Alive;
        public:
            Character(std::string name, int health);
            virtual ~Character() = default;
            const std::string& getName() const;
            bool isAlive() const;
            void hit(int damage);

            void DisplayInfo();

            virtual void applyWeapon(Character& character) = 0;
    };
}




#endif //CHARACKTER_H
