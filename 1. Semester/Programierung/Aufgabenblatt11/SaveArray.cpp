#include "SaveArray.h"
#include <iostream>
#define length 10

SaveArray::SaveArray(unsigned int set) {
    array = nullptr;
    default_numbers = set;
}


void SaveArray::set_new_array(int newlength, int oldlength) {
    new_array = new int[newlength];
    
    //Abfrage ob array speicherverbraucht
    if(array == nullptr){
    array = new int[length];
    for (int i = 0; i < length; i++) {
        array[i] = default_numbers;
    }
    max_pos = length;
    }
    
    //auf new_array die alten + default werte setzen
    for (int i = 0; i < newlength; i++) {
        if (i < oldlength) {
            new_array[i] = array[i];
        } else {
            new_array[i] = default_numbers;
        }
    }
    
    delete[] array;
    array = new_array;
    max_pos = newlength;
}


bool SaveArray::setAt(unsigned int pos, int val) {
    if (pos < max_pos) {
        array[pos - 1] = val;
        return true;
    } else {
        set_new_array(pos + 1, max_pos);
        array[pos - 1] = val;
        return true;
    }
}


int SaveArray::getAt(unsigned int pos) {
    if (pos < max_pos) {
        return array[pos - 1];
    } else {
        set_new_array(pos + 1, max_pos);
        return array[pos - 1];
    }
}


int SaveArray::get_length() {
    return max_pos;
}


int SaveArray::getMinimum() {
    for (int i = 0; i < max_pos - 1; i++) {
        for (int j = 0; j < max_pos - i - 1; j++) {
            int *pa = array + j;
            int *pb = array + j + 1;
            if (*pa > *pb) {
                int temp = *pa;
                *pa = *pb;
                *pb = temp;
            }
        }
    }
    return array[0];
}


bool SaveArray::fill(unsigned int pos1, unsigned int pos2, int value) {
    if (pos2 < pos1 || pos2 >= max_pos) {
        return false;
    }

    for (int i = pos1; i <= pos2; i++) {
        array[i] = value;
    }
    return true;
}

SaveArray::~SaveArray(){
    delete[] array;
}