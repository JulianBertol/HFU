#include "SaveArray.cpp"
int main(){
    SaveArray array{10};
    printf("%i\n", array.getAt(10));
    printf("%i\n", array.setAt(10,1));
    printf("%i \n",array.getAt(10));
    array.setAt(1,10);
    array.setAt(2,20);
    array.setAt(3,5);
    array.setAt(4,300);
    array.setAt(5,40);
    array.setAt(6,25);
    array.setAt(40,2);
    array.setAt(99,1);
    printf("Minumum: %i\n", array.getMinimum());
    array.fill(10,14, 20);
    printf("An der Stelle 11: %i\n", array.getAt(11));
    return 0;
}