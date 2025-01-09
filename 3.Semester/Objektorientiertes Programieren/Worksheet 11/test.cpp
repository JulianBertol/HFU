#include <iostream>
#include "City.h"
#include "Position.h"
#include <cassert>
#include "sort.h"


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
}

void testGetNameXY(){
    auto position=createPosition();
    hfu::City city(position.getName(), position.getX(), position.getY(), nullptr,0);
    assert(city.getName()=="Mordor");
    assert(city.getX()==47);
    assert(city.getY()==11);
}


void testGetNumberOfPOIs(){
    auto city=createCity();
    assert(city.getNumberOfPOI()==3);
}


void testCity() {
    testCtor();
    testGetNameXY();
    testGetNumberOfPOIs();
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
    hfu::City empty("Mordor", 47, 11);
    empty.add("Orodruin");
    assert(empty.getNumberOfPOI()==1);
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
    std::string saurons[]={"Sauron","Sauron","Sauron"};
    hfu::City same("Mordor", 47, 11, saurons, 3);
    assert(true==same.remove("Sauron"));
    assert(same.getNumberOfPOI()==0);
}

void test_operator_position() {
    hfu::Position position("Mordor", 47, 11);
    std::cout << position <<std::endl;
}

void test_operator_city() {
    std::string pois[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City city("Mordor", 47, 11,pois,3);
    std::cout << city <<std::endl;
}


template <typename T> bool compare(T elements, T key) {
    return elements > key;
}

template<> bool compare <char>(const char elements, const char key ) {
    return std::tolower(elements) > std::tolower(key);
}

template <typename T> void sort(T* elements, const int size) {
    for (int i = 1; i < size; ++i) {
        T key = elements[i];
        int j = i - 1;

        while (j >= 0 && compare(elements[j], key)) {
            elements[j + 1] = elements[j];
            j = j - 1;
        }
        elements[j + 1] = key;
    }
}

//Nein dies funktioniert nicht, da die nötigen Operatoren nicht überladen worden sind.
//Man könnte diese Operatoren überladen, dann würde es funktionieren.


void test_sort(hfu::Position* positions, const int size) {
    sort (positions, size);
    for (int i = 1; i < size; i++) {
        assert(positions[i - 1] < positions[i]);
    }
}

void fill_test_sort() {
    hfu::Position positions[5] = {
        hfu::Position("Mordor", 1, 2),
        hfu::Position("Zordor", 7, 8),
        hfu::Position("Ardor", 10, 12),
        hfu::Position("Bordor", 0, 5),
        hfu::Position("Julian", 3, 4)
    };
    char chars[4]{'B','a','A','x'};
    char expected[4]{'a','A','B','x'};
    sort(chars,4);
    for (int i = 0; i < 4; ++i) {
        assert(chars[i]==expected[i]);
    }
    test_sort(positions, 5);
}

void test_task8_1() {
    auto city=createCity();
    assert(city[0]=="Sauron");
    assert(city[1]=="Minas Morgul");
    assert(city[2]=="Orodruin");
    try {
        city[3];
        assert(false);
    }catch (...){}
    try {
        city[-1];
        assert(false);
    }catch (...){}
    city[0]="Gandalf";
    assert(city[0]=="Gandalf");
    try {
        city[3]="Gandalf";
        assert(false);
    }catch (...){}
    try {
        city[-1]="Gandalf";
        assert(false);
    }catch (...){}
    const auto constCity=createCity();
    assert(constCity[0]=="Sauron");
}

void test_task8_2() {
    std::string pois_morder[]={"Sauron", "Minas Morgul", "Orodruin"};
    hfu::City left("Mordor", 47, 11,pois_morder,3);
    std::string pois_arrakis[]={"Arrakeen", "Desert"};
    hfu::City right("Arrakis", 23, 42,pois_arrakis,2);
    left=right;
    assert(left.getName()=="Arrakis");
    assert(left.getX()==23);
    assert(left.getY()==42);
    assert(left.getNumberOfPOI()==2);
    assert(left[0]==pois_arrakis[0]);
    assert(left[1]==pois_arrakis[1]);
}

void test_sort_vector() {
    hfu::Position *pos1 = new hfu::Position("Mordor", 47, 11);
    hfu::Position *pos2 = new hfu::Position("Zordor", 10, 12);
    hfu::Position *pos3 = new hfu::Position("Ardor", 3, 5);
    std::vector<hfu::Position> positions;
    positions.push_back(*pos1);
    positions.push_back(*pos2);
    positions.push_back(*pos3);

    sort_vec(positions);

    assert(positions.at(0) == *pos3);
    assert(positions.at(1) == *pos1);
    assert(positions.at(2) == *pos2);
}

int main() {
    std::cout << "starting ..." << std::endl;
    //testCity();
    //test_task6_1();
    //test_add();
    //test_remove();
    //test_operator_position();
    //test_operator_city();
    fill_test_sort();
    test_task8_1();
    test_task8_2();
    test_sort_vector();
    std::cout << "done." << std::endl;
    return 0;
}