#include "SaveArray.h"
#include <stdio.h>

#define length 100
int array[length];

SaveArray::SaveArray(unsigned int set){
                for(int i = 0; i < length - 1; i++){
                array[i] = set;
                }
            }
bool SaveArray::setAt(unsigned int pos, int val){
                if(pos < length){
                array[pos] = val;
                return true;
                }
                return false;
            }
int SaveArray::getAt(unsigned int pos){
                if(pos <= length - 1){
                    return array[pos];
                }
                return -999;
            }
int SaveArray::getMinimum(){
                for(int i = 0; i < length - 1; i++){
                    for(int j = 0; j < length - i - 1; j++){
                        int *pa = array + j;
                        int *pb = array + j + 1;
                        if(*pa > *pb){
                            int temp = *pa;
                            *pa = *pb;
                            *pb = temp;
                        }
                    }
                }
                return array[0];
            }
bool SaveArray::fill(unsigned int pos1, unsigned int pos2, int value){
                if(pos2 < pos1){
                    return false;
                }
                else if(pos2 >= 100){
                    return false;
                }
                
                if(pos1 <= pos2){
                    for(int i = pos1; i <= pos2; i++){
                        array[i] = value;
                    }
                }
                return true;
            }