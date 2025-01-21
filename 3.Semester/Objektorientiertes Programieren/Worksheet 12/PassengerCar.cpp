//
// Created by Julian Bertol on 14.01.25.
//

#include "PassengerCar.h"

PassengerCar::PassengerCar(const std::string& numberPlate, const std::string& manufacturer, bool sunroof) : Vehicle(numberPlate, manufacturer), sunRoof(sunroof) {
}


void PassengerCar::dump() {
    std::cout << sunRoof << std::endl;
}

bool PassengerCar::hasSunRoof() {
    return sunRoof;
}
