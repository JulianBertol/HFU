public class Counter_test {

    public static void main(String[] args){
        Counter a = new Counter();
        a.decrement();
        a.increment();
        a.increment();
        System.out.println("a = " + a.get());
        a.reset();
        System.out.println("a(Nach reset) = " + a.get());
        a.increment();
        a.increment();
        a.decrement();
        System.out.println("a = " + a.get());
        a.reset();

        //for schleife
        for (int i = 0; i < 20; i++){
            a.increment();
        }

        System.out.println("a (Nach der ersten Schleife) = " + a.get());

        for (int i = 0; i < 10; i++){
            a.decrement();
        }

        System.out.println("a (Nach den Schleifen) = " + a.get());
        a.restore();
        a.save();
        a.increment();
        a.increment();

        System.out.println("a = " + a.get());

        a.restore();
        System.out.println("a (Nach restore) = " + a.get());
    }

}