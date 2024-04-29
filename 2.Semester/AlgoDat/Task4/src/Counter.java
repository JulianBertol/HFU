package task1;

public class Counter{
    private int x; //zähler
    private int save;
    private boolean saved = false;

    public Counter(){ //Konstruktor
        x = 0;
    }

    public void increment(){ //hochzählen
        x++;
    }

    void decrement(){
        if(x > 0){ //runterzählen
            x--;
        }
    }

    public int get(){ //auslesen
        return x;
    }

    public void reset(){ //reset
        x = 0;
    }

    public void save(){
        save = x;
        saved = true;
    }

    public void restore(){
        if(saved){
        x = save;
    }else {
            System.out.println("Es ist nichts gespeichert!");
        }
    }
}