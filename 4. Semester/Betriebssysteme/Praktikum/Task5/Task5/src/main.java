import java.io.*;

public class main {
    // Konstante für die Anzahl der Zahlen
    private static final int INHALT_GROESSE = 1024;

    public static void main(String[] args) {
        try {
            // Pipe erstellen
            PipedOutputStream pipedOut = new PipedOutputStream();
            PipedInputStream pipedIn = new PipedInputStream(pipedOut);

            // PipeWriter und PipeReader Objekte erstellen
            PipeWriter writer = new PipeWriter(pipedOut, INHALT_GROESSE);
            PipeReader reader = new PipeReader(pipedIn);

            // Thread A mit PipeWriter
            Thread threadA = new Thread(writer);

            // Thread B mit PipeReader
            Thread threadB = new Thread(reader);

            // Beide Threads starten
            threadA.start();
            //threadB.start();

            // Auf beide Threads warten
            threadA.join();
            //threadB.join();

            System.out.println("Programm beendet");

        } catch (IOException e) {
            System.err.println("IO-Fehler beim Erstellen der Pipe: " + e.getMessage());
        } catch (InterruptedException e) {
            System.err.println("Thread wurde unterbrochen: " + e.getMessage());
        }
    }
}