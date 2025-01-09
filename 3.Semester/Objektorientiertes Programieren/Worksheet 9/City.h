#ifndef CITY_H
#define CITY_H
#include <memory>
#include <string>
#include "Position.h"
#include <iostream>


namespace hfu {
    class City {
        private:
        Position position;
        std::unique_ptr<std::string[]> pois;
        int number_of_poi;
        int length{};
        static std::unique_ptr<std::string[]> initializepois(const std::string *pois, int length);
        City(const Position& position, const std::string* POI, int number_of_POI);
        void setPOI(int i, const std::string& POI) const;
        std::string getPOI(int index) const;

        public:
        City(const std::string& name, int x, int y, const std::string *pois, int length);
        City(const std::string& name, int x, int y);
        City(const City &other);
        std::string getName() const;
        int getX() const;
        int getY() const;
        int getNumberOfPOI() const;
        bool checkbounds(int index) const;
        void add (const std::string &name);
        void resize_array(int new_size);
        bool remove(const std::string &name);
        Position getPosition() const;
        friend std::ostream& operator<<(std::ostream& os, const City& city);
        const std::string &operator[](int index) const;
        std::string &operator[](int index);

        hfu::City &operator=(const std::string &poi);

        City &operator=(const hfu::City& other);
    };
}



#endif