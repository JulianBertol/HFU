#include "City.h"

#include <stdexcept>

    hfu::City::City(const Position& position, const std::string* pois, const int number_of_poi)
        :position(position), number_of_poi(number_of_poi), pois(initializepois(pois, number_of_poi)){
    }

    hfu::City::City(const std::string& name, int x, int y, std::string *pois, int length)
    : City(Position(name, x, y), pois, length){
    }

    hfu::City::City(const City& other)
    : City(other.position, other.pois, other.number_of_poi){}


    hfu::City::~City() {
        delete[] pois;
        pois = nullptr;
    }

    std::string* hfu::City::initializepois(const std::string* pois, const int length) {
        if (length < 0) throw std::invalid_argument("length cannot be negative");

        std::string* poi = new std::string[length];
        for (int i = 0; i < length; i++) {
            poi[i] = pois[i];
        }
        return poi;
    }

    std::string hfu::City::getName() const {
        return this->position.getName();
    }

    int hfu::City::getX() const {
        return this->position.getX();
    }

    int hfu::City::getY() const {
        return this->position.getY();
    }

    bool hfu::City::checkbounds(int index) const {
        if (index >= 0 && index < number_of_poi) {
            return true;
        }
        throw std::out_of_range("Index out of range");
    }


    std::string hfu::City::getPOI(const int index) const {
        if (checkbounds(index)) {
            return pois[index];
        }
    }

    void hfu::City::setPOI(const int i, const std::string &poi) const {
        if(checkbounds(i)) {
            this->pois[i] = poi;
        }
    }

    int hfu::City::getNumberOfPOI() const {
        return this->number_of_poi;
    }