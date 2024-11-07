#ifndef CITY_H
#define CITY_H
#include <string>
#include "Position.h"


namespace hfu {
    class City {
        private:
        Position position;
        std::string *POI;
        int number_of_POI;
        std::string *initializepois(const std::string *POIS, int length);

        public:
        City(const Position& position, const std::string* POI, int number_of_POI);
        ~City();
        std::string getName() const;
        int getX() const;
        int getY() const;
        std::string getPOI(int index) const;
        void setPOI(int i, const std::string& POI) const;
        int getNumberOfPOI() const;
    };
}



#endif