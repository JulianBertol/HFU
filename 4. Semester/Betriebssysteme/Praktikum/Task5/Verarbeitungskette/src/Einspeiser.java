import java.util.Random;

class Einspeiser extends Thread {
    private Queue zielQueue;
    private int kennWert;
    private Random random = new Random();

    public Einspeiser(Queue zielQueue, int kennWert) {
        this.zielQueue = zielQueue;
        this.kennWert = kennWert;
    }

    public void run() {
        try {
            for (int i = 0; i < 5; i++) {
                // Zufällige Wartezeit zwischen 0 und 2 Sekunden
                int sleepTime = random.nextInt(2000);
                Thread.sleep(sleepTime);

                zielQueue.put(kennWert);
                System.out.println("Einspeiser (" + kennWert + "): Zahl " + kennWert + " eingespeist");
            }
        } catch (InterruptedException e) {
            System.out.println("Einspeiser (" + kennWert + "): Unterbrochen");
        }
    }
}