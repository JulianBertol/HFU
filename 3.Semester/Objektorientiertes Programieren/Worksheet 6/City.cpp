#include "City.h"

#include <iostream>
#include <ostream>
#include <stdexcept>

hfu::City::City(const Position& position, const std::string* pois, const int number_of_poi)
    : position(position), pois(initializepois(pois, number_of_poi)), number_of_poi(number_of_poi), length(number_of_poi) {
    if (pois == nullptr && number_of_poi != 0) {
        throw std::invalid_argument("City does not have pois");
    }
}

hfu::City::City(const std::string& name, int x, int y, const std::string* pois, int length)
    : City(Position(name, x, y), pois, length) {
}

hfu::City::City(const std::string& name, int x, int y)
    : position(name, x, y), pois(nullptr), number_of_poi(0) {
}

hfu::City::City(const City& other)
    : City(other.position, other.pois, other.number_of_poi) {}

hfu::City::~City() {
    delete[] pois;
    pois = nullptr;
}

std::string* hfu::City::initializepois(const std::string* pois, const int length) {
    if (length < 0) throw std::invalid_argument("length cannot be negative");

    if (pois == nullptr && length != 0) {
        throw std::invalid_argument("pois cannot be null if length is not zero");
    }

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
    return "";
}

void hfu::City::setPOI(const int i, const std::string& poi) const {
    if (checkbounds(i)) {
        this->pois[i] = poi;
    }
}

int hfu::City::getNumberOfPOI() const {
    return this->number_of_poi;
}

void hfu::City::add(const std::string& name) {
    if (this->number_of_poi == this->length) {
        resize_array(number_of_poi);
    }
    this->pois[number_of_poi] = name;
    this->number_of_poi++;
}

void hfu::City::resize_array(int new_size) {
    new_size++;

    std::string* new_string = new std::string[new_size];

    for (int i = 0; i < this->number_of_poi; i++) {
        new_string[i] = this->pois[i];
    }

    delete[] this->pois;
    this->pois = new_string;
    this->length = new_size;
}

bool hfu::City::remove(const std::string& poi) {
    bool removed = false;

    for (int i = 0; i < this->number_of_poi;) {
        if (this->pois[i] == poi) {
            for (int j = i; j < this->number_of_poi - 1; j++) {
                this->pois[j] = this->pois[j + 1];
            }
            this->number_of_poi--;
            removed = true;
        } else {
            i++;
        }
    }
    resize_array(number_of_poi);
    return removed;
}
