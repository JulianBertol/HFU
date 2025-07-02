import java.util.concurrent.atomic.AtomicInteger;

class TicketAnbieter {
    private AtomicInteger VerfuegbareTickets;

    TicketAnbieter(int n) {
        VerfuegbareTickets = new AtomicInteger(n);
    }

    boolean TicketsVerfuegbar() {
        return VerfuegbareTickets.get() > 0;
    }

    int TicketVerkauf() {
        int aktuelleTickets;
        do {
            aktuelleTickets = VerfuegbareTickets.get();
            if (aktuelleTickets <= 0) {
                return 0;
            }
        } while (!VerfuegbareTickets.compareAndSet(aktuelleTickets, aktuelleTickets - 1));

        return aktuelleTickets;
    }
}