public class PhilosophenProblem {
    //ohne
    /*
    public static void main(String[] args) {
        Gabel[] gabeln = new Gabel[5];
        for (int i = 0; i < 5; i++) {
            gabeln[i] = new Gabel(i);
        }

        for (int i = 0; i < 5; i++) {
            new Philosoph(i, gabeln[i], gabeln[(i + 1) % 5]).start();
        }
    }
     */

    //Mit
    public static void main(String[] args) {
        int anzahl = 5;
        Gabel[] gabeln = new Gabel[anzahl];
        for (int i = 0; i < anzahl; i++) {
            gabeln[i] = new Gabel(i);
        }

        // Erlaube nur 4 gleichzeitige Philosophen
        SemaphoreGroup gruppe = new SemaphoreGroup(anzahl);
        for (int i = 0; i < anzahl - 1; i++) {
            gruppe.changeValues(new int[]{1, 0, 0, 0, 0});  // z.B. 4 Philosoph-Slots belegt
        }

        for (int i = 0; i < anzahl; i++) {
            new Philosoph(i, gabeln[i], gabeln[(i + 1) % anzahl], gruppe).start();
        }
    }
}