cmake_minimum_required(VERSION 3.29)
project(OOP)

set(CMAKE_CXX_STANDARD 20)

add_executable(Worksheet_11 test.cpp City.cpp Position.cpp
        sort.h
        Character.cpp
        Character.h
        Dwarf.cpp
        dwarf.h
        Elf.cpp
        Elf.h
        Orc.cpp
        Orc.h
        BattleSimulation.h)