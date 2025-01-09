#include "Position.h"

namespace hfu {
        Position::Position(const std::string &name, const int x, const int y):name(name), x(x), y(y) {
        }

        Position::Position(){}

        const std::string &Position::getName()const {
            return this->name;
        }

        int Position::getX() const {
            return this->x;
        }


        int Position::getY() const {
            return this->y;
        }

        std::string Position::get_key () const{
            return getName() + " " + std::to_string(getX()) + " " + std::to_string(getY());
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

    bool Position::operator==(const Position& other) const {
            if(compare(other) == 0)
                return true;
            return (this->x==other.x && this->y==other.y);
        }
    bool Position::operator!=(const Position& other) const {
            if(compare(other) != 0)
                return true;
            return false;
        }
    bool Position::operator<(const Position& other) const {
            return this->compare(other) < 0;
        }
    bool Position::operator>(const Position& other) const {
            return this->compare(other) > 0;
        }
    bool Position::operator<=(const Position& other) const {
            return this->compare(other) <= 0;
        }
    bool Position::operator>=(const Position& other) const {
             return this->compare(other) >= 0;
        }
    std::ostream& operator<<(std::ostream& os, const Position& p) {
            os << "(" << p.getName() << ", x = " << p.getX() << ", y = " << p.getY() << ")";
            return os;
        }
}
