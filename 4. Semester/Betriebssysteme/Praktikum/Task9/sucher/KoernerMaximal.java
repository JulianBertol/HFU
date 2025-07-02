package sucher;
import java.util.concurrent.CountDownLatch;

class KoernerMaximal extends SucherImpl {
	private int maxKoernerZahl;
	// hier fehlt ein Attribut zur Synchronisation der Sucher
	private CountDownLatch zaehler;

	KoernerMaximal(int[] aktuellePosition, Richtung richtung,
				   Territorium territorium, CountDownLatch zaehler) {
		super(aktuellePosition, richtung, territorium);
		this.zaehler = zaehler;
		this.maxKoernerZahl = 0;
	}

	private int gibMaxKoernerZahl() {
		return this.maxKoernerZahl;
	}

	public void run() {
		boolean istKachel = true;
		
		do {
			bearbeiteKachel();
			istKachel = bewege();
		} while (istKachel);

		// Auftrag erledigt
		
		// hier muss etwas programmiert werden, dass dem main
		// Thread signalisiert, dass einer von beiden Threads
		// die groesste Koernerzahl von seinen Kacheln 
		// herausgefunden hat

		// Thread ist fertig – Signal an CountDownLatch
		zaehler.countDown();
	}

	private void bearbeiteKachel() {
		// hier muss die koernerZahl der aktuellen Kachel mit der
		// bisher groessten Koernerzahl (maxKoernerZahl) verglichen
		// werden. Was soll passieren, wenn die aktuelle Koernerzahl
		// groesser ist, als maxKoernerZahl??

		int[] position = gibPosition();
		int aktuelleKoerner = gibTerritorium().gibKoerner(position);

		if (aktuelleKoerner > maxKoernerZahl) {
			maxKoernerZahl = aktuelleKoerner;
		}
	}

	// Konfiguration Territorium
	private static int[][] koernerZahlen = { { 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 },
			{ 0, 0, 0, 2, 0, 0, 0, 6, 0, 0, 0, 0 }, { 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 },
			{ 0, 0, 3, 0, 6, 2, 0, 0, 6, 7, 0, 0 }, { 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 },
			{ 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0 }, };

	public static void main(String[] args) {
		Territorium territorium = new Territorium(koernerZahlen);

		CountDownLatch zaehler = new CountDownLatch(2);
		int[] aktuellePosition = new int[] { 3, 4 };
		KoernerMaximal sucherLinks;
		KoernerMaximal sucherRechts;

		// zwei helfende Sucher muessen hier erzeugt und
		// auf die Suche geschickt d.h. gestartet werden;
		// einer nach links , einer nach rechts

		sucherLinks = new KoernerMaximal(aktuellePosition, Richtung.LINKS, territorium, zaehler);
		sucherRechts = new KoernerMaximal(aktuellePosition, Richtung.RECHTS, territorium, zaehler);

		Thread threadLinks = new Thread(sucherLinks);
		Thread threadRechts = new Thread(sucherRechts);
		threadLinks.start();
		threadRechts.start();
		
		// nun wartet der main Thread darauf,
		// dass die beiden Sucher fertig werden

		try {
			zaehler.await(); // ← ersetzt aktives Warten!
		} catch (InterruptedException e) {
			e.printStackTrace();
		}

		/*
		while (sucherLinks.isAlive() && sucherRechts.isAlive()) {
			// diese Schleife tut nichts ("aktives Warten")
			// Warum ist diese Schleife schlecht?
			// Sie sollen diese Schleife hier ersetzen. Dies
			// soll mit Hilfe eines CountDownLatch passieren.
		}
		*/
		// Verbraucht CPU-Ressourcen
		// Keine saubere Synchronisation

		int maxKoernerZahl = 0;
		
		// nun sind beide fertig. Die MaxKoerner Zahlen der beiden
		// Threads koennen verglichen werden
		// und das Endergebnis kann
		// ermittelt und verkuendet werden

		maxKoernerZahl = Math.max(
				sucherLinks.gibMaxKoernerZahl(),
				sucherRechts.gibMaxKoernerZahl()
		);
		
		System.out.println("Die maximale Anzahl an Koernern" + " auf Kacheln in\n"
				+ "der Reihe, in der ich stehe, betraegt: " + maxKoernerZahl );
	}

}

/*
Countdown latch ist auf 2 definiert. In der Run Methode wird zaehler.countDown(); aufgerufen
dadurch wird countdownlatch -1 gerechnet und sobald es bei 0 ist, ist klar, dass der Thread durchgelaufen ist
 */