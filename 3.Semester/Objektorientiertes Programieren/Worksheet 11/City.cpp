#include "City.h"
typedef std::vector<std::string> vec;

hfu::City::City(const Position& position, const std::string* pois, const int number_of_poi)
    : position(position), pois(initializepois(pois, number_of_poi)){
    if (pois == nullptr && number_of_poi != 0) {
        throw std::invalid_argument("City does not have pois");
    }
}

hfu::City::City(const std::string& name, int x, int y, const std::string* pois, int length)
    : City(Position(name, x, y), pois, length) {
}

hfu::City::City(const std::string& name, int x, int y) : City(Position(name, x, y), nullptr, 0) {
}


vec hfu::City::initializepois(const std::string* poisArray, const int length) {
    return vec(poisArray, poisArray + length);
}

//setter
void hfu::City::setPOI(const int i, const std::string& poi) {
    this->pois.at(i) = poi;
}

//getter
int hfu::City::getNumberOfPOI() const {
    return this->pois.size();
}

hfu::Position hfu::City::getPosition() const {
    return this->position;
}

std::string hfu::City::getPOI(const int index) const {
    return pois.at(index);
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

//add methode
void hfu::City::add(const std::string& name) {
    pois.push_back(name);
}



bool hfu::City::remove(const std::string& poi) {
    bool removed = false;
    for (auto iterator = pois.begin(); iterator != pois.end(); ++iterator) {
        if (*iterator == poi) { //Loop geht den vektor durch und erase entfernt das gesuchte objekt
            pois.erase(iterator);
            removed = true;
            break;
        }
    }
    return removed;
}

//operatoren
std::ostream& hfu::operator<<(std::ostream& os, const hfu::City& city) {
    os << city.getPosition() << std::endl << city.getNumberOfPOI()  << std::endl;
    for (const std::string& poi : city.pois) {
        os << poi << std::endl;
    }
    return os;
}

//lesen
const std::string& hfu::City::operator[](const int index) const {
    return pois.at(index);
}

//schreiben
std::string& hfu::City::operator[](const int index) {
    return pois.at(index);
}