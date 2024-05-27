import bruch.Bruch;
public class Main {
    public static void main(String[] args) {
        Mergesort mergesort = new Mergesort();
        Mergesort_objects mergesort_objects = new Mergesort_objects();
        Bruch d = new Bruch(1,2);
        Bruch e = new Bruch(2,3);
        Bruch f = new Bruch(1,1);
        Bruch g = new Bruch(8,2);
        Bruch h = new Bruch(2019,329291);
        Integer[] a = {15, 3, 8, 9, 20, 70, 4, 6};
        Integer[] b = {15, 3, 8, 9, 20, 70, 4, 6};
        String[] c = {"apple", "orange", "banana", "pear", "grape"};
        Bruch[] sort_bruch = {d,e,f,g,h};
        mergesort.sort(a);
        mergesort_objects.sort(b);
        mergesort_objects.sort(c);
        mergesort_objects.sort(sort_bruch);
        //print output a
        System.out.print("a: ");
        for (int i=0; i<a.length; ++i)
            System.out.print(a[i] + " ");
        System.out.println();
        //print output b
        System.out.print("b: ");
        for (int i=0; i<a.length; ++i)
            System.out.print(b[i] + " ");
        System.out.println();
        //print output c
        System.out.print("c: ");
        for (String s : c)
            System.out.print(s + " ");
        System.out.println();
        //print output bruch
        System.out.print("bruch: ");
        for (Bruch x : sort_bruch)
            System.out.print(x + " ");
        System.out.println();
    }
}