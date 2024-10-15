#include <cassert>
#include <iostream>

class Position {
    private:
    std::string name;
    int x = 0;
    int y = 0;

    public:
    void set(const std::string& name, int x,int y) {
        this->name = name;
        this->x = x;
        this->y = y;
    };
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

int main() {
    std::cout << "Starting program..." << std::endl;

    Position mordor;
    mordor.set("Mordor", 3, 4);
    assert(mordor.getName() == "Mordor");
    assert(mordor.getX() == 3);
    assert(mordor.getY() == 4);

    mordor.set("hallo", 0, -10);
    assert(mordor.getName() == "hallo");
    assert(mordor.getX() == 0);
    assert(mordor.getY() == -10);


    std::cout << "End of program." << std::endl;
    return 0;
}