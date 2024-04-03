public class BruchTest {
    public static void main(String[] args){
        Bruch x = new Bruch(1,1);
        Bruch y = new Bruch(3,2);
        Bruch z = new Bruch(1, 1); //Bruch für Schleife

        System.out.println(x.get());
        x.add(y);
        System.out.println(x.get());
        x.multi(y);
        System.out.println(x.get());
        x.div(y);
        System.out.println(x.get());
        x.sub(y);
        System.out.println(x.get());

        System.out.println("Loop: \n -----------------------------------------------------------");
        for(int i = 1; i <20; i++){
            Bruch a = new Bruch(1, i);
            z.add(a);
            System.out.println(z.get());
        }

        x.e(10);
        System.out.println(x.get());

    }
}
