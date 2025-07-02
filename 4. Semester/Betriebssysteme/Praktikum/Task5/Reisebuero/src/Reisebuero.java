class Reisebuero extends Thread {
    private String name;
    private TicketAnbieter anbieter;
    Reisebuero(String name, TicketAnbieter anbieter) {
        this.name = name;
        this.anbieter = anbieter;
    }
    void warteAufKunde() {
        try {Thread.sleep(Math.round(1000 * Math.random()));
        } catch (InterruptedException e) {
        }
    }
    public void run() {
        warteAufKunde();
        while (anbieter.TicketsVerfuegbar()) {
            int nr = anbieter.TicketVerkauf();
            System.out.println( name + " verkauft Ticket " + nr);
            warteAufKunde();
        }
    }
}