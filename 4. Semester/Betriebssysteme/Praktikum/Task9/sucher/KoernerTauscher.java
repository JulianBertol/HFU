package sucher;
import java.util.concurrent.Exchanger;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.TimeUnit;

class KoernerTauscher extends SucherImpl {

	private Exchanger<Integer> austauscher;

	KoernerTauscher(int[] neuePosition, Richtung richtung, Territorium territorium, Exchanger<Integer> austauscher) {
		super(neuePosition, richtung, territorium);
		this.austauscher = austauscher;
	}

	// Konfiguration Territorium
	private static int[][] koernerZahlen = { { 2, 0, 0, 0, 1, 5, 8 }, { 3, 0, 4, 0, 5, 2, 9 } };

	public static void main(String[] args) {
		Exchanger<Integer> austauscher = new Exchanger<>();
		Territorium territorium = new Territorium(koernerZahlen);
		
		// Zwei KoernerTauscher Objekte werden erzeugt.
		KoernerTauscher sucher1 = new KoernerTauscher(new int[] {0, 0}, Richtung.RECHTS, territorium, austauscher);
		KoernerTauscher sucher2 = new KoernerTauscher(new int[] {1, 6}, Richtung.LINKS, territorium, austauscher);

		ExecutorService pool = Executors.newFixedThreadPool(2);;
		
		// Unter pool wird ein FixedThread Pool mit zwei Threads
		// gespeichert.
		
		// Dem Thread Pool werden die KoernerTauscher Objekt uebergeben.
		pool.execute(sucher1);
		pool.execute(sucher2);
		pool.shutdown();
		
		// Es wird mit der Methode awaitTermination darauf gewartet, das 
		// der Pool beide Aufgaben fertiggestellt hat
		try {
			pool.awaitTermination(5, TimeUnit.SECONDS);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}

		// das Territorium Objekt soll die Koerner Zahlen auf dem Bildschirm
		// ausgeben
		territorium.gibKoernerAus();

	}

	public void run() {
		boolean istKachel = true;
		
		do {
			bearbeiteKachel();
			istKachel = bewege();
		} while (istKachel);
	}

	private void bearbeiteKachel() {
		// gibTerritorium gibt das Territorium Objekt, auf dem dieser
		// Sucher arbeitet.
		// Die zahlKoerner der aktuellen Kachel wird dem Exchanger Objekt
		// uebergeben.
		// die zahlKoerner des anderen Thread wird von der Methode
		// exchange uebernommen
		// mit der Methode setztKoernerZahl wird die Koerner Zahl der
		// aktuellen Kachel auf den neuen Wert gesetzt
		int koernerAlt = gibTerritorium().gibKoerner(gibPosition());
		try {
			int koernerNeu = austauscher.exchange(koernerAlt); // Austausch mit Partner
			gibTerritorium().setzeKoernerZahl(gibPosition(), koernerNeu);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
	}

}
