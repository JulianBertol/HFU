public class RestrictedCounter extends Counter {
    private int capacity;
    public RestrictedCounter(int x){
        super();
        capacity = x;
    }

    public void increment(){
        if(super.get() < capacity){
            super.increment();
        }else{
            System.out.println("Die Maximale Kapazität wurde erreicht!");
        }
    }

    public int freeCapacity(){
        return capacity - super.get();
    }
}
