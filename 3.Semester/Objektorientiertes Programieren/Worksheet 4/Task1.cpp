#include <iostream>
#include "City.h"
#include "Position.h"
#include <cassert>


hfu::Position createPosition(){
    std::string mordor = "Mordor";
    hfu::Position result(mordor, 47, 11);
    return result;
}

hfu::City createCity(){
    auto position=createPosition();
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City result(position, pois, 3);
    return result;
}

void testCtor(){
    auto position=createPosition();
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City city(position,pois,3);
    pois[0]="Gandalf";
    assert(city.getPOI(0)=="Sauron");
}

void testGetNameXY(){
    auto position=createPosition();
    hfu::City city(position, nullptr,0);
    assert(city.getName()=="Mordor");
    assert(city.getX()==47);
    assert(city.getY()==11);
}


void testGetPOI(){
    auto city=createCity();
    assert(city.getPOI(0)=="Sauron");
    assert(city.getPOI(1)=="Minas Morgul");
    assert(city.getPOI(2)=="Orodruin");
    try {
        city.getPOI(3);
        assert(false);
    }catch (...){}
    try {
        city.getPOI(-1);
        assert(false);
    }catch (...){}
}

void testSetPOI(){
    auto city=createCity();
    city.setPOI(0,"Gandalf");
    assert(city.getPOI(0)=="Gandalf");

    try {
        city.setPOI(3,"Gandalf");
        assert(false);
    }catch (...){}
    try {
        city.setPOI(-1,"Gandalf");
        assert(false);
    }catch (...){}
}

void testGetNumberOfPOIs(){
    auto city=createCity();
    assert(city.getNumberOfPOI()==3);
}


void testCity() {
    testCtor();
    testGetNameXY();
    testGetPOI();
    testSetPOI();
    testGetNumberOfPOIs();
}

int main() {
    std::cout << "starting ..." << std::endl;
    testCity();
    std::cout << "done." << std::endl;
    return 0;
}