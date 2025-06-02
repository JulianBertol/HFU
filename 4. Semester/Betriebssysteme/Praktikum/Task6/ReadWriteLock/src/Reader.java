public class Reader extends Thread {
    private Speicher speicher;
    Reader(Speicher speicher) {
        this.speicher = speicher;
    }

    public void run() {
        int length = speicher.size();
        for (int i = 0; i < length; i++) {
            String zeile = speicher.readLine(i);
            if (zeile != null) {
                System.out.println("Leser " + getName() + " liest: " + zeile);
            } else {
                System.out.println("Leser " + getName() + " konnte Zeile " + i + " nicht lesen.");
            }
        }
    }
}
