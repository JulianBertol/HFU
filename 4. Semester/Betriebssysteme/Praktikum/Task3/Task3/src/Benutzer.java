class Benutzer implements Runnable {
    String dateiname;
    int anzahl;
    Drucker drucker;
    boolean isFirstTask;

    Benutzer(Drucker drucker, String dateiname, int anzahl, boolean isFirstTask) {
        this.drucker = drucker;
        this.dateiname = dateiname;
        this.anzahl = anzahl;
        this.isFirstTask = isFirstTask;
    }

    public void run() {
        for (int i = 0; i < anzahl; i++) {
            drucker.druckeDatei(dateiname, isFirstTask);
            try {
                Thread.sleep(100);
            } catch(InterruptedException e) {
                e.printStackTrace();
            }
        }

        // Wenn der erste Task alle Aufträge abgeschlossen hat
        if (isFirstTask) {
            drucker.markiereErstenTaskAlsFertig();
        }
    }
}