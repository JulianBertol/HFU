#ifndef CITY_H
#define CITY_H
#include <string>
#include "Position.h"
#include <ostream>


namespace hfu {
    class City {
        private:
        Position position;
        std::string *pois;
        int number_of_poi;
        int length{};
        static std::string *initializepois(const std::string *pois, int length);
        City(const Position& position, const std::string* POI, int number_of_POI);

        public:
        City(const std::string& name, int x, int y, const std::string *pois, int length);
        City(const std::string& name, int x, int y);
        City(const City &other);
        ~City();
        std::string getName() const;
        int getX() const;
        int getY() const;
        std::string getPOI(int index) const;
        void setPOI(int i, const std::string& POI) const;
        int getNumberOfPOI() const;
        bool checkbounds(int index) const;
        void add (const std::string &name);
        void resize_array(int new_size);
        bool remove(const std::string &name);
        Position getPosition() const;
        friend std::ostream& operator<<(std::ostream& os, const City& city);
    };
}



#endif