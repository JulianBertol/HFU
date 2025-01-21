#include <iostream>

#include "StationWagon.h"
#include "Van.h"

int main() {
    std::cout << "Starting Program" << std::endl;
    std::cout << std::boolalpha;
    Van van("VS XY 42", "BMW", 100);
    van.dump();
    std::cout<<std::endl;
    Vehicle& vehicle=van;
    vehicle.dump();
    std::cout<<std::endl;
    StationWagon stationWagon("VS XY 42", "BMW", 100, true, 8);
    stationWagon.dump();
    std::cout<<std::endl;
    std::cout << "End Program" << std::endl;
}