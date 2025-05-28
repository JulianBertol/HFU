public class main {
    public static void main(String[] args) throws InterruptedException {

        // Queues erstellen
        Queue inputQueue1 = new Queue(10, "InputQueue1");
        Queue inputQueue2 = new Queue(10, "InputQueue2");
        Queue outputQueue = new Queue(20, "OutputQueue");

        // Einspeiser erstellen
        Einspeiser einspeiser1 = new Einspeiser(inputQueue1, 1); // produziert Einsen
        Einspeiser einspeiser2 = new Einspeiser(inputQueue2, 0); // produziert Nullen

        // Merge Objekte erstellen
        Merge merge1 = new Merge(inputQueue1, outputQueue);
        Merge merge2 = new Merge(inputQueue2, outputQueue);

        // Alle Threads gleichzeitig starten
        einspeiser1.start();
        einspeiser2.start();
        merge1.start();
        merge2.start();

        // Warten bis Einspeiser fertig sind
        einspeiser1.join();
        einspeiser2.join();

        // Merge Threads unterbrechen
        merge1.interrupt();
        merge2.interrupt();

        // Auf Merge Threads warten
        merge1.join();
        merge2.join();

        outputQueue.print();
    }
}
