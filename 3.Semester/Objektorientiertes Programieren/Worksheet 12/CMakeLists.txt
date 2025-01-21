cmake_minimum_required(VERSION 3.30)
project(Worksheet_12)

set(CMAKE_CXX_STANDARD 20)

add_executable(Worksheet_12 main.cpp
        StationWagon.cpp
        StationWagon.h
        PassengerCar.cpp
        PassengerCar.h
        Van.cpp
        Van.h
        Vehicle.cpp
        Vehicle.h)