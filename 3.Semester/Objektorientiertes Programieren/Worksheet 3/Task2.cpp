#include <iostream>
#include <cassert>

namespace hfu {
    class Position {
    private:
        std::string name;
        int x = 0;
        int y = 0;

    public:
        Position(const std::string& name, const int x, const int y):name(name), x(x), y(y) {}

        const std::string& getName() const {
            return this->name;
        };
        int getX() const {
            return this->x;
        };
        int getY() const {
            return this->y;
        };
    };
}

int main() {
    std::cout << "Starting Program ..." << std::endl;

    std::string mordor = "Mordor";
    hfu::Position position(mordor, 47, 11);

    assert(position.getName() == mordor);
    assert(position.getX() == 47);
    assert(position.getY() == 11);
    mordor[0]='X';  //Hier wird im array morder, der in der Main Methode erstellt wurde die Pos 0 verändert
    assert(position.getName() == "Mordor"); //Hier wird das bereits übergebene Array abegfragt. Deshalb ist der Test korrekt

    std::cout << "Ending Program..." << std::endl;
    return 0;
}