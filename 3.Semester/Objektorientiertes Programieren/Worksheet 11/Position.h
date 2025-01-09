#ifndef POSITION_H
#define POSITION_H

#include <string>
#include <ostream>

namespace hfu {
    class Position {
    private:
        std::string name;
        int x;
        int y;
        int compare(const Position& position) const;

    public:
        Position(const std::string &name, int x, int y);

        Position();

        const std::string& getName()const;
        int getX() const;
        int getY() const;
        std::string get_key() const;
        bool operator==(const Position& position) const;
        bool operator!=(const Position& position) const;
        bool operator<(const Position& position) const;
        bool operator>(const Position& position) const;
        bool operator<=(const Position& position) const;
        bool operator>=(const Position& position) const;
        friend std::ostream& operator<<(std::ostream& os, const Position& p);
    };
}
#endif