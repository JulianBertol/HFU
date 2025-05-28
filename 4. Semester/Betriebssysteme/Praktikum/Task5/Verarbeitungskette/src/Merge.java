// Merge Thread
class Merge extends Thread {
    private Queue inputQueue;
    private Queue outputQueue;

    public Merge(Queue input, Queue output) {
        this.inputQueue = input;
        this.outputQueue = output;
    }

    public void run() {
        try {
            while (!isInterrupted()) {
                try {
                    int zahl = inputQueue.get();
                    outputQueue.put(zahl);
                    System.out.println("Merge: Zahl " + zahl + " von Input zu Output verschoben");
                } catch (InterruptedException e) {
                    break;
                }
            }

            // Nach Interrupt: InputQueue vollständig auslesen
            while (!inputQueue.isEmpty()) {
                try {
                    int zahl = inputQueue.get();
                    outputQueue.put(zahl);
                    System.out.println("Merge (nach Interrupt): Zahl " + zahl + " von Input zu Output verschoben");
                } catch (InterruptedException e) {
                    break;
                }
            }
        } catch (Exception e) {
            System.err.println("Merge Fehler: " + e.getMessage());
        }
    }
}