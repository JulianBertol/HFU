package sucher;
import java.util.concurrent.CyclicBarrier;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;


class KoernerEsser extends SucherImpl implements Runnable {
	
	private static CyclicBarrier barriere = null;
	private int zahlEsser = 0;

	KoernerEsser(int[] neuePosition, Richtung richtung, Territorium territorium,
			 int zahlEsser, CyclicBarrier cyclicBarrier// hier fehlt ein Parameter - welcher?
			 ) {
		super(neuePosition, richtung, territorium);
		// hier muss das barriere Attribut initialisiert werden
		this.zahlEsser = zahlEsser;
		this.barriere = cyclicBarrier;
	}

	private static int[][] zahlKoerner = { 
			{ 1, 0, 2, 0, 3, 0, 4, 0, 5, 0 }, 
			{ 6, 0, 7, 0, 8, 0, 9, 0, 10, 0 },
			{ 1, 0, 2, 0, 3, 0, 4, 0, 5, 0 }, 
			{ 6, 0, 7, 0, 8, 0, 9, 0, 10, 20 } };

	public static void main(String[] args) {
		Territorium territorium = new Territorium(zahlKoerner);
		int zahlEsser = 3;
		// Hier muss ein Thread Pool mit einer festen Anzahl von Threads
		// erzeugt werden. Wieviele Threads muessen es sein?
		// Warum duerfen es nicht weniger sein, als die zahl der Esser?
		ExecutorService dienstleister = Executors.newFixedThreadPool(zahlEsser);
		// hier muss noch eine CyclicBarrier erzeugt werden
		// bekommt jeder KoernerEsser seine eigene CyclicBarrier
		// oder jeder dieselbe?
		// Mit welchem Wert muss die CyclicBarrier erzeugt werden?
		for (int i = 0; i < zahlEsser; i++) {
			KoernerEsser esser = new KoernerEsser(
					new int[] {0, 0},
					Richtung.RECHTS,
					territorium,
					zahlEsser,
					barriere
			);
			dienstleister.execute(esser);
		}
		
		dienstleister.shutdown();
		// hier soll der main Thread solange warten, bis der letzte Auftrag
		// des Thread Pool abgearbeitet ist. Dies gelingt mit einer
		// Methode von ExecutorService

		try {
			dienstleister.awaitTermination(1, java.util.concurrent.TimeUnit.MINUTES);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
		
		territorium.gibKoernerAus();
	}
	
	public void run() {
		int zeile = 0;
		boolean istKachel = true;
		do {
			
			do {
				bearbeiteKachel();
				istKachel = bewege();
			} while (istKachel);
			
			zeile++;
			istKachel = this.setzePosition(new int[] {zeile, 0});
		} while(istKachel);
	}

	private void bearbeiteKachel() {
		// Mit gibTerritorium(), das von SucherImpl geerbt wird, kann
		// man das aktuelle Territorium erhalten. Dort kann man
		// mit einer ebenfalls geerbten Methode die Zahl der Koerner
		// bei der aktuellen Kachel erhalten.
		
		// Dann muss man, wenn die Zahl der Koerner groesser ist, als die
		// Zahl der Esser, die Zahl der Koerner um eins verringern.
		// Mit welcher Methode von Territorium kann man die Zahl der 
		// Koerner um eins verringern?
		
		// Wie kann man die CyclicBarrier verwenden, damit jeder Esser
		// die urspruengliche Zahl der Koerner sieht?

		int[] position = gibPosition();
		Territorium t = gibTerritorium();

		int aktuelleKoerner = t.gibKoerner(position);

		// Jeder sieht denselben Zustand → Barriere vor der Prüfung
		try {
			barriere.await();
		} catch (Exception e) {
			e.printStackTrace();
		}

		if (aktuelleKoerner >= zahlEsser) {
			// Synchronisierung sicherstellen: Barriere garantiert Sichtbarkeit
			// Nur einer darf reduzieren → Barriere nochmal, um Reihenfolge zu trennen
			try {
				barriere.await();
			} catch (Exception e) {
				e.printStackTrace();
			}
			// Noch mal prüfen: eventuell hat ein anderer schon reduziert
			if (t.gibKoerner(position) >= zahlEsser) {
				t.dekrementiereKoerner(position);
			}
		}

		// Synchronisation: alle warten, bis Reduktion ggf. abgeschlossen ist
		try {
			barriere.await();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}
}
