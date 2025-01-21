//
// Created by Julian Bertol on 14.01.25.
//

#ifndef VEHICLE_H
#define VEHICLE_H
#include <iostream>


class Vehicle {
    protected:
        const std::string numberPlate;
        const std::string manufacturer;
    public:
        Vehicle(std::string numberPlate, std::string manufacturer);
        void dump();
        std::string getNumberPlate() const;
        std::string getManufacturer() const ;
};



#endif //VEHICLE_H
