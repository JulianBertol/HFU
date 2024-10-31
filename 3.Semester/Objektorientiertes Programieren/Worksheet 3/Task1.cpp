#include <iostream>
#include <cassert>

namespace tst{
    void sort (int* numbers, const int size) {
        for (int i = 0; i < size; i++) {
            int key = numbers[i];
            int j = i - 1;
            while (j >= 0 && numbers[j] > key) {
                numbers[j + 1] = numbers[j];
                j = j - 1;
            }
            numbers[j + 1] = key;
        }
    }

    void test_sort(int* numbers, const int size) {
        sort (numbers, size);
        for (int i = 1; i < size; i++) {
            assert(numbers[i - 1] <= numbers[i]);
        }
    }

    void fill_test_sort() {
        int numbers1[] = {1, 2, 3, 4, 5};
        test_sort(numbers1, 5);

        int numbers2[] = {5, 4, 3, 2, 1};
        test_sort(numbers2, 5);

        int numbers3[] = {3, 3, 2, 1, 2};
        test_sort(numbers3, 5);

        int numbers4[] = {};
        test_sort(numbers4, 0);
    }
}

int main() {
    std::cout << "starting Programm ..." << std::endl;

    tst::fill_test_sort();

    std::cout << "ending Programm ... " << std::endl;
    return 0;
}
