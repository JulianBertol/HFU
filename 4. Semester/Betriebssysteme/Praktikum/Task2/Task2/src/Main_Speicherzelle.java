public class Main_Speicherzelle {
    public static void main(String[] args) {
        // Zwei Speicherzellen erstellen
        Speicherzelle a = new Speicherzelle();
        Speicherzelle b = new Speicherzelle();

        // Initialwerte setzen
        a.setWert(10);
        b.setWert(20);

        // Zwei Threads erstellen, die swapWert in entgegengesetzter Richtung aufrufen
        Thread t1 = new Thread(() -> {
            System.out.println("Thread 1 startet a.swapWert(b)");
            a.swapWert(b);  // Thread 1 versucht, Werte von a nach b zu tauschen
            System.out.println("Thread 1 hat Austausch abgeschlossen");
        });

        Thread t2 = new Thread(() -> {
            System.out.println("Thread 2 startet b.swapWert(a)");
            b.swapWert(a);  // Thread 2 versucht, Werte von b nach a zu tauschen
            System.out.println("Thread 2 hat Austausch abgeschlossen");
        });

        // Threads starten
        t1.start();
        t2.start();

        // Auf Abschluss der Threads warten (wird bei einem Deadlock nicht passieren)
        try {
            t1.join();
            t2.join();
        } catch (InterruptedException e) {
            e.printStackTrace();
        }

        System.out.println("Programm beendet");
    }
}