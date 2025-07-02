class Verpackungsprozess {
   public static void main(String[] args) {
      Signale signale = new Signale();

       /* die Prozesse Kartonzufuhrprozess, Produktablageprozess und 
          Kartonatransportprozess starten */

      Kartonzufuhrprozess kartonzufuhr = new Kartonzufuhrprozess(signale);
      Produktablageprozess produktablage = new Produktablageprozess(signale);
      Kartonabtransportprozess kartonabtransport = new Kartonabtransportprozess(signale);

      System.out.println("Starte Verpackungsprozess...");

      // Alle drei Threads starten
      kartonzufuhr.start();
      produktablage.start();
      kartonabtransport.start();

      System.out.println("Alle Prozesse gestartet. Verpackungszyklus läuft...");

   }
}