#include "SaveArray.cpp"
using namespace std;
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
    printf("Die aktuelle laenge betraegt: %i \n", array.get_length());
    array.setAt(40,2);
    printf("Die aktuelle laenge betraegt: %i\n", array.get_length());
    array.setAt(105,187);
    printf("Die aktuelle laenge betraegt: %i\n", array.get_length());
    printf("Minumum: %i\n", array.getMinimum());
    array.fill(10,14, 20);
    array.setAt(31,30);
    printf("An der Stelle 11: %i\n", array.getAt(11));
    printf("An der Stelle 105: %i\n", array.getAt(105));
    printf("An der stelle 31: %i\n", array.getAt(31));
    printf("An der stelle 606: %i \n", array.getAt(606));
    return 0;
}