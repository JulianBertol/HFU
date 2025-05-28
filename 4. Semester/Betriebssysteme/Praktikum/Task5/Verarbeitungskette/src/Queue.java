class Queue {
    private int[] buffer;
    private int head = 0;
    private int tail = 0;
    private int count = 0;
    private int size;
    private String name;
    private final Object lock = new Object();

    public Queue(int groesse, String name) {
        this.buffer = new int[groesse];
        this.size = groesse;
        this.name = name;
    }

    public int get() throws InterruptedException {
        synchronized (lock) {
            while (isEmpty()) {
                lock.wait(); // Warten bis Daten verfügbar
            }

            int value = buffer[head];
            head = (head + 1) % size;
            count--;

            lock.notifyAll(); // Benachrichtigen dass Platz frei ist
            return value;
        }
    }

    public void put(int zahl) throws InterruptedException {
        synchronized (lock) {
            while (count >= size) {
                lock.wait(); // Warten bis Platz frei ist
            }

            buffer[tail] = zahl;
            tail = (tail + 1) % size;
            count++;

            lock.notifyAll(); // Benachrichtigen dass Daten verfügbar
        }
    }

    public boolean isEmpty() {
        synchronized (lock) {
            return count == 0;
        }
    }

    public void print() {
        synchronized (lock) {
            System.out.print(name + " Inhalt: [");
            if (!isEmpty()) {
                int tempHead = head;
                for (int i = 0; i < count; i++) {
                    System.out.print(buffer[tempHead]);
                    if (i < count - 1) System.out.print(", ");
                    tempHead = (tempHead + 1) % size;
                }
            }
            System.out.println("]");
        }
    }
}