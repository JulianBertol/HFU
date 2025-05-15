public class Test {
    public static void main(String[] argv) {
        if (argv.length >= 2) {
            Drucker d = new Drucker();
            Runnable haenselRunnable = new Benutzer(d, argv[0], 5, true);  // true = erster Task
            Runnable gretelRunnable = new Benutzer(d, argv[1], 5, false);  // false = zweiter Task

            Thread haensel = new Thread(haenselRunnable);
            Thread gretel = new Thread(gretelRunnable);

            // Beide Threads können gleichzeitig starten
            haensel.start();
            gretel.start();
        } else {
            System.out.println("Bitte zwei Dateinamen als Argumente uebergeben!");
        }
    }
}