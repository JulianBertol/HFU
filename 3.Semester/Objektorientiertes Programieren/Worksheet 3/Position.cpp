#include "Position.h"

namespace hfu {
        Position::Position(const std::string &name, const int x, const int y):name(name), x(x), y(y) {
        }

        const std::string &Position::getName() {
            return this->name;
        }

        int Position::getX() const {
            return this->x;
        }


        int Position::getY() const {
            return this->y;
        }

    int Position::compare(const Position& other) const {
            if (name < other.name) {
                return -1;
            } else if (name > other.name) {
                return 1;
            }

            if (x < other.x) {
                return -1;
            } else if (x > other.x) {
                return 1;
            }

            if (y < other.y) {
                return -1;
            } else if (y > other.y) {
                return 1;
            }

            return 0;
        }
}
