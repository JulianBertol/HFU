//
// Created by Julian Bertol on 14.01.25.
//

#ifndef VAN_H
#define VAN_H
#include <iostream>
#include "Vehicle.h"



class Van : public virtual Vehicle{
    protected:
        const int maxLoad;
    public:
        Van(const std::string& numberPlate, const std::string& manufacturer, int maxLoad);
        void dump();
        int getMaxLoad() const;
};



#endif //VAN_H
