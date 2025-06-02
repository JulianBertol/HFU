public class Writer extends Thread {
    private Speicher speicher;
    private String[] text;
    private int zahlWiederholungen;

    Writer(Speicher speicher, String [] text, int zahlwiederholungen) {
        this.speicher = speicher;
        this.text = text;
        this.zahlWiederholungen = zahlwiederholungen;
    }

    public void run(){
        for (int i = 0; i < zahlWiederholungen; i++) {
            for (String zeile : text) {
                speicher.writeLine(zeile);
                System.out.println("Schreiber " + getName() + " schreibt: " + zeile);
            }
        }
    }
}
