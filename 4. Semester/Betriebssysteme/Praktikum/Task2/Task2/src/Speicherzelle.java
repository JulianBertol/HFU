class Speicherzelle {
    private int wert;

    public synchronized void setWert(int w) {
        System.out.println(Thread.currentThread().getName() + " setzt Wert auf: " + w);
        wert = w;
    }

    public synchronized int getWert() {
        System.out.println(Thread.currentThread().getName() + " liest Wert: " + wert);
        return wert;
    }

    public synchronized void swapWert(Speicherzelle s) {
        System.out.println(Thread.currentThread().getName() + " ist in swapWert eingetreten");

        System.out.println(Thread.currentThread().getName() + " versucht, Wert aus anderer Zelle zu lesen");
        int h = s.getWert();  // Versucht, einen Lock auf die andere Speicherzelle zu bekommen

        System.out.println(Thread.currentThread().getName() + " versucht, Wert in andere Zelle zu schreiben");
        s.setWert(wert);

        System.out.println(Thread.currentThread().getName() + " setzt eigenen Wert");
        setWert(h);

        System.out.println(Thread.currentThread().getName() + " hat Austausch abgeschlossen");
    }
}