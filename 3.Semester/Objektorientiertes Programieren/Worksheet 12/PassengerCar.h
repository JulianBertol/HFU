//
// Created by Julian Bertol on 14.01.25.
//

#ifndef PASSENGERCAR_H
#define PASSENGERCAR_H
#include <iostream>
#include "Vehicle.h"


class PassengerCar : public virtual Vehicle{
    protected:
        const bool sunRoof;
    public:
        PassengerCar(const std::string& numberPlate, const std::string& manufacturer, bool sunRoof);
        void dump();
        bool hasSunRoof();
};



#endif //PASSENGERCAR_H
