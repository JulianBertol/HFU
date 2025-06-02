public class main {
    public static void main(String[] args) {
        Speicher speicher = new Speicher();

        String[] text1 = {"text 1: Zeile 1", "text 1: Zeile 2"};
        String[] text2 = {"text 2: Zeile 1", "text 2: Zeile 2"};

        Writer schreiber1 = new Writer(speicher, text1, 200000);
        Writer schreiber2 = new Writer(speicher, text2, 200000);

        Reader leser1 = new Reader(speicher);
        Reader leser2 = new Reader(speicher);

        // Starte alle Threads gleichzeitig
        schreiber1.setName("Schreiber-1");
        schreiber2.setName("Schreiber-2");
        leser1.setName("Leser-1");
        leser2.setName("Leser-2");

        schreiber1.start();
        schreiber2.start();
        try {
            schreiber1.join();
            schreiber2.join();
        } catch (InterruptedException e) {}
        leser1.start();
        leser2.start();
    }
}