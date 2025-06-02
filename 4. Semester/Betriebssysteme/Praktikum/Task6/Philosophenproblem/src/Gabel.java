public class Gabel {
    private final int nummer;

    public Gabel(int nummer) {
        this.nummer = nummer;
    }

    public synchronized void aufnehmen() {
        // blockiert, wenn Gabel schon genommen
    }

    public synchronized void ablegen() {
        // Gabel freigeben
    }

    public int getNummer() {
        return nummer;
    }
}