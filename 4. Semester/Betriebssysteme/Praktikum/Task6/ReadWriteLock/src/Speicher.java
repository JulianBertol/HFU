import java.util.LinkedList;
import java.util.concurrent.locks.ReentrantReadWriteLock;

class Speicher extends LinkedList<String> {
    private int writethreads = 0;
    private int readthreads = 0;
    private final ReentrantReadWriteLock lock = new ReentrantReadWriteLock(); //mehrere reader dürfen lock haben aber nur ein writer darf ein lock haben

    void writeLine(String zeile){
        lock.writeLock().lock();         // Schreib-Lock holen
        schreiberRein();
        try{
            Thread.yield();
            this.add(zeile);
        }finally{
            schreiberRaus();
            lock.writeLock().unlock();   // Schreib-Lock freigeben
        }

    }
    // in writeLine soll der Liste eine Zeile hinzugefügt
// werden
    String readLine(int zeilenNummer){
        lock.readLock().lock();          // Lese-Lock holen
        leserRein();
        try {
            Thread.yield();
            if (zeilenNummer >= 0 && zeilenNummer < this.size()) {
                return this.get(zeilenNummer);
            } else {
                return null;
            }
        } finally {
            leserRaus();
            lock.readLock().unlock();          // Lese-Lock freigeben
        }
    }
    // in readLine soll der Listeneintrag mit dem Index
// zeilenNummer gelesen und zurückgegeben werden
    synchronized void schreiberRein(){
        writethreads++;
        System.out.println("[LOCK] Schreibe Threads: " + writethreads + " Lese Threads : " + readthreads);
    }
    // soll die Zahl schreibendeThreads in Speicher um
// eins erhöhen, und die aktuellen Zahlen
// lesendeThreads und schreibendeThreads
// auf Bildschirm
// ausgeben. Soll immer aufgerufen werden, wenn ein
// Thread die Methode writeLine betritt.
    synchronized void schreiberRaus(){
        writethreads--;
        System.out.println("[UNLOCK] Schreibe Threads: " + writethreads + " Lese Threads : " + readthreads);
    }
    // soll die Zahl schreibendeThreads in Speicher um
// eins erniedrigen, und die aktuellen Zahlen
// lesendeThreads und schreibendeThreads
// auf Bildschirm
// ausgeben. Soll immer aufgerufen werden, wenn ein
// Thread die Methode writeLine verläßt
    synchronized void leserRein(){
        readthreads++;
        System.out.println("[LOCK] Lese Threads: " + writethreads + " Schreib Threads : " + readthreads);
    }
    // analog zu schreiberRein
    synchronized void leserRaus(){
        readthreads--;
        System.out.println("[UNLOCK] Lese Threads: " + writethreads + " Schreib Threads : " + readthreads);
    }
// analog zu schreiberRaus
}