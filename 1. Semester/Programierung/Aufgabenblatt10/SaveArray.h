#ifndef __SAVEARRAY_H
#define __SAVEARRAY_H

class SaveArray{
    public:
            SaveArray(unsigned int set);

            bool setAt(unsigned int pos, int val);

            int getAt(unsigned int pos);

            int getMinimum();

            bool fill(unsigned int pos1, unsigned int pos2, int value);
};

#endif