#ifndef CITY_H
#define CITY_H
#include <memory>
#include <string>
#include "Position.h"
#include <iostream>
#include <vector>


namespace hfu {
    typedef std::vector<std::string> vec;
    class City {
        private:
        Position position;
        vec pois;
        City(const Position& position, const std::string* POI, int number_of_POI);
        void setPOI(int i, const std::string& POI);
        std::string getPOI(int index) const;

        public:
        City(const std::string& name, int x, int y, const std::string *pois, int length);
        City(const std::string& name, int x, int y);
        std::string getName() const;
        int getX() const;
        int getY() const;
        int getNumberOfPOI() const;
        void add (const std::string &name);
        bool remove(const std::string &name);
        Position getPosition() const;
        friend std::ostream& operator<<(std::ostream& os, const City& city);
        const std::string &operator[](int index) const;
        std::string &operator[](int index);
        static vec initializepois(const std::string* poisArray, const int length);
    };
}



#endif