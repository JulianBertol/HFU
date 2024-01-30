#ifndef __SAVEARRAY_H
#define __SAVEARRAY_H

class SaveArray{
    private:
    int *array;
    int *new_array;
    int max_pos = 0;
    unsigned int default_numbers;
    public:
            SaveArray(unsigned int set);

            void set_new_array(int newlength, int oldlength);

            bool setAt(unsigned int pos, int val);

            int getAt(unsigned int pos);

            int get_length();

            int getMinimum();

            bool fill(unsigned int pos1, unsigned int pos2, int value);

            ~SaveArray();
};

#endif