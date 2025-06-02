public class Philosoph extends Thread {
    private final int id;
    private final Gabel links, rechts;
    private final SemaphoreGroup semaphorengruppe;

    public Philosoph(int id, Gabel links, Gabel rechts, SemaphoreGroup gruppe) {
        this.id = id;
        this.links = links;
        this.rechts = rechts;
        this.semaphorengruppe = gruppe;
    }

    public void run() {
        try {
            while (true) {
                denken();
                essen();
            }
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
    }

    private void denken() throws InterruptedException {
        System.out.println("Philosoph " + id + " denkt.");
        Thread.sleep((long)(Math.random() * 100));
    }

    private void essen() throws InterruptedException {
        int[] anfordern = new int[semaphorengruppe.getNumberOfMembers()];
        anfordern[id] = 1;
        semaphorengruppe.changeValues(anfordern);  // Eintrittsanfrage (1 Philosoph)

        synchronized (links) {
            synchronized (rechts) {
                System.out.println("Philosoph " + id + " isst.");
                Thread.sleep((long)(Math.random() * 100));
            }
        }

        int[] freigeben = new int[semaphorengruppe.getNumberOfMembers()];
        freigeben[id] = -1;
        semaphorengruppe.changeValues(freigeben);  // Verlassen (1 Philosoph)
    }
}
