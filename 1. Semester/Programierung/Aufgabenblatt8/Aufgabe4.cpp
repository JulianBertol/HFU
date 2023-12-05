#include <stdio.h>

struct Datum
{
    int day,month,year;
    enum month{Januar = 1, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember};
};


bool bevor(const Datum &a, const Datum &b){
if (a.year == b.year && a.month == b.month && a.day == b.day){
    return false;
}
if(a.year < b.year){
    return true;
}else if (a.year == b.year) {
    if (a.month < b.month){
        return true;
    }else if (a.month == b.month){
        if (a.day < b.day){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
    
}else{
    return false;
}
};

int main(){
    Datum date = {21,Datum::Januar,2021};
    Datum date2 = {22, Datum::Mai, 2020};
    Datum *pdate = &date;
    Datum *pdate2 = &date2;

    printf("%i",bevor(*pdate, *pdate2));
    return 0;
}