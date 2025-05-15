import java.io.*;
import java.util.List;

class Drucker {
    private boolean firstTaskFinished = false;

    void druckeDatei(String dateiname, boolean isFirstTask) {
        synchronized (this) {
            // Wenn es die zweite Aufgabe ist und die erste noch nicht fertig ist, warten
            while (!isFirstTask && !firstTaskFinished) {
                try {
                    this.wait();  // Warte, bis firstTaskFinished == true wird
                } catch (InterruptedException e) {
                    e.printStackTrace();
                }
            }

            try {
                BufferedReader in = new BufferedReader(
                        new FileReader(dateiname));
                String line = in.readLine();
                while (line != null) {
                    // Zeile line auf dem Drucker ausgeben,
                    // hier simuliert durch Bildschirmausgabe
                    System.out.println(line);
                    line = in.readLine();
                }
            } catch (Exception e) {
                System.out.println(
                        "Eine Ausnahme ist aufgetreten. " + e);
            }
        }
    }

    void markiereErstenTaskAlsFertig() {
        synchronized (this) {
            firstTaskFinished = true;
            this.notifyAll();
        }
    }
}