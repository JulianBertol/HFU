import java.io.*;

class PipeWriter implements Runnable {
    private final PipedOutputStream output;
    private final int dataSize;

    public PipeWriter(PipedOutputStream output, int dataSize) {
        this.output = output;
        this.dataSize = dataSize;
    }

    // Die geforderte write-Methode
    void write(byte[] b, int off, int len) {
        try {
            // Schreibt 'len' Bytes aus dem Array 'b' ab Position 'off' in die Pipe
            output.write(b, off, len);
        } catch (IOException e) {
            System.err.println("Writer Fehler: " + e.getMessage());
        }
    }

    @Override
    public void run() {
        // Erstelle ein Byte-Array mit den gewünschten Daten
        byte[] data = new byte[dataSize];

        // Fülle das Array mit Byte-Werten (0-255 zyklisch)
        for (int i = 0; i < dataSize; i++) {
            data[i] = (byte) i;
        }

        // Verwende die write-Methode um alle Daten zu schreiben
        write(data, 0, dataSize);
    }
}