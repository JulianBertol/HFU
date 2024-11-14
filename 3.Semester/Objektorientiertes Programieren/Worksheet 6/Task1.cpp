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
    hfu::City result(position.getName(), position.getX(), position.getY() ,pois, 3);
    return result;
}

void testCtor(){
    auto position=createPosition();
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City city(position.getName(), position.getX(), position.getY(),pois,3);
    pois[0]="Gandalf";
    assert(city.getPOI(0)=="Sauron");
}

void testGetNameXY(){
    auto position=createPosition();
    hfu::City city(position.getName(), position.getX(), position.getY(), nullptr,0);
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

void City_test() {
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City mordor("Mordor", 47, 11, pois, 3);
    auto copy = mordor;
    mordor.setPOI(2,"Cirith Ungol");
    assert(copy.getPOI(2)=="Orodruin");
}

void test_task6_1() {
    hfu::City city("Mordor", 47, 11, nullptr, 0);
    assert(city.getNumberOfPOI()==0);
    try {
        hfu::City city("Mordor", 47, 11, nullptr, 23);
        assert(false);
    } catch (...) {}
    hfu::City empty("Mordor", 47, 11);
    assert(empty.getNumberOfPOI()==0);
}

void test_add() {
    std::string pois[]={"Sauron", "Minas Morgul"};
    hfu::City city("Mordor", 47, 11,pois,2);
    city.add("Orodruin");
    assert(city.getNumberOfPOI()==3);
    assert(city.getPOI(2)=="Orodruin");
    hfu::City empty("Mordor", 47, 11);
    empty.add("Orodruin");
    assert(empty.getNumberOfPOI()==1);
    assert(empty.getPOI(0)=="Orodruin");
}

void test_remove() {
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City city("Mordor", 47, 11, pois, 3);
    hfu::City copy1=city;
    assert(true==copy1.remove("Orodruin"));
    assert(copy1.getNumberOfPOI()==2);
    assert(false== copy1.remove("Shire"));
    hfu::City copy2=city;
    assert(true==copy2.remove("Sauron"));
    assert(copy2.getNumberOfPOI()==2);
    assert(copy2.getPOI(0)=="Minas Morgul");
    std::string saurons[]={"Sauron","Sauron","Sauron"};
    hfu::City same("Mordor", 47, 11, saurons, 3);
    assert(true==same.remove("Sauron"));
    assert(same.getNumberOfPOI()==0);
}

int main() {
    std::cout << "starting ..." << std::endl;
    testCity();
    City_test();
    test_task6_1();
    test_add();
    test_remove();
    std::cout << "done." << std::endl;
    return 0;
}