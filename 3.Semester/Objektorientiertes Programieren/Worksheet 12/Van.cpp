//
// Created by Julian Bertol on 14.01.25.
//

#include "Van.h"

Van::Van(const std::string& numberPlate, const std::string& manufacturer, int maxLoad) : Vehicle(numberPlate, manufacturer), maxLoad(maxLoad) {}

void Van::dump() {
    std::cout << maxLoad << " tons" << std::endl;
}

int Van::getMaxLoad() const {
    return maxLoad;
}