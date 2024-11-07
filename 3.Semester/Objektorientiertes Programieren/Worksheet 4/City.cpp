#include "City.h"

#include <stdexcept>

hfu::City::City(const Position& position, const std::string* POI, const int number_of_POI)
        :position(position), number_of_POI(number_of_POI), POI(initializepois(POI, number_of_POI)){
    };

    hfu::City::~City() {
        delete[] POI;
    }

    std::string* hfu::City::initializepois(const std::string* POIS, const int length) {
        std::string* POI = new std::string[length];
        for (int i = 0; i < length; i++) {
            POI[i] = POIS[i];
        }
        return POI;
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

    std::string hfu::City::getPOI(const int index) const {
        if (index >= 0 && index < number_of_POI) {
            return POI[index];
        }
        throw std::out_of_range("Index out of range");
    }

    void hfu::City::setPOI(const int i, const std::string &POI) const {
        if(i >= 0 && i < number_of_POI - 1) {
            this->POI[i] = POI;
        }else
            throw std::out_of_range("Index out of range");
    }

    int hfu::City::getNumberOfPOI() const {
        return this->number_of_POI;
    }