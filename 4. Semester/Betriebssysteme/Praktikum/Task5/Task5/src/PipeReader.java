import java.io.*;

class PipeReader implements Runnable {
    private final PipedInputStream input;

    public PipeReader(PipedInputStream input) {
        this.input = input;
    }

    // Die geforderte read() Methode
    int read() {
        try {
            return input.read();
        } catch (IOException e) {
            System.err.println("Read Fehler: " + e.getMessage());
            return -1;
        }
    }

    @Override
    public void run() {
        try {
            int count = 0;

            // Endlosschleife
            while (true) {
                // 1ms schlafen
                Thread.sleep(1);

                // Ein Byte mit der read() Methode lesen
                int value = read();

                // Prüfen ob Stream beendet ist
                if (value == -1) {
                    System.out.println("Thread B: Stream beendet - insgesamt " + count + " Bytes gelesen");
                    break;
                }

                count++;
                // Byte auf Bildschirm ausgeben
                System.out.println("Thread B: Byte #" + count + " = " + value);
            }
        } catch (InterruptedException e) {
            System.err.println("Reader Fehler: " + e.getMessage());
        }
    }
}