#ifndef POSITION_H
#define POSITION_H

#include <string>

namespace hfu {
    class Position {
    private:
        std::string name;
        int x;
        int y;

    public:
        Position(const std::string& name, int x, int y);
        const std::string& getName();
        int getX() const;
        int getY() const;
        int compare(const Position& position) const;
    };
}
#endif