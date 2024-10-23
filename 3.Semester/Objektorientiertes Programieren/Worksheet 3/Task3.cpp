#include <iostream>
#include "Position.h"
#include <cassert>

int main(){
    std::cout<< "Starting Programm ..." << std::endl;
    std::string mordor = "Mordor";
    hfu::Position position(mordor, 47, 11);
    assert(position.compare(position)==0);
    hfu::Position position_name("zordor", 47, 11);
    hfu::Position position_x(mordor, 48, 11);
    hfu::Position position_y(mordor, 47, 12);
    assert(position.compare(position_name)<0);
    assert(position.compare(position_x)<0);
    assert(position.compare(position_y)<0);
    assert(position_name.compare(position)>0);
    assert(position_x.compare(position)>0);
    assert(position_y.compare(position)>0);
    std::cout<< "End Programm" << std::endl;

    return 0;
}