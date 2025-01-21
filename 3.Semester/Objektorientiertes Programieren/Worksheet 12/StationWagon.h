//
// Created by Julian Bertol on 14.01.25.
//

#ifndef STATIONWAGON_H
#define STATIONWAGON_H
#include "PassengerCar.h"
#include "Van.h"


class StationWagon : public Van,  public PassengerCar{
    private:
        const int numSeats;
    public:
        StationWagon(const std::string& numberPlate, const std::string& manufacturer, int maxLoad, bool sunroof, int numSeats);
        void dump();

        int getNumSeats() const;
};



#endif //STATIONWAGON_H
