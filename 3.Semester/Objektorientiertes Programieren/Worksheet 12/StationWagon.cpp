//
// Created by Julian Bertol on 14.01.25.
//

#include "StationWagon.h"

StationWagon::StationWagon(const std::string& numberPlate, const std::string& manufacturer, int maxLoad, bool sunroof, int numSeats)
    : Vehicle(numberPlate, manufacturer), Van(numberPlate, manufacturer, maxLoad), PassengerCar(numberPlate, manufacturer, sunroof), numSeats(numSeats) {
}


void StationWagon::dump() {
    std::cout << getNumSeats() << " seats" << std::endl;
}

int StationWagon::getNumSeats() const {
    return numSeats;
}