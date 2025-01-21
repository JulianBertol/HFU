//
// Created by Julian Bertol on 14.01.25.
//

#include "Vehicle.h"

Vehicle::Vehicle(std::string numberPlate, std::string manufacturer) : numberPlate(numberPlate), manufacturer(manufacturer) {

}


void Vehicle::dump() {
    std::cout << numberPlate << " " << manufacturer << std::endl;
}

std::string Vehicle::getNumberPlate() const {
    return numberPlate;
}

std::string Vehicle::getManufacturer() const {
    return manufacturer;
}