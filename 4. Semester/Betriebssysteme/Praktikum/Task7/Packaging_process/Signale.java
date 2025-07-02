class Signale {
   private boolean ablageposFrei = true;
   private boolean produktablageErlaubt = false;
   private boolean produktAbgelegt = false;

   // Darauf warten, dass Signa1 auf ,true, gesetzt wird
   public synchronized void WarteAblageposFrei() throws InterruptedException {
      while (!ablageposFrei) {
         wait();
      }
   }

   public synchronized void WarteProduktablageErlaubt() throws InterruptedException {
      while (!produktablageErlaubt) {
         wait();
      }
   }

   public synchronized void WarteProduktAbgelegt() throws InterruptedException {
      while (!produktAbgelegt) {
         wait();
      }
   }

   // Signalzustand auf ,value, setzen
   public synchronized void setAblageposFrei (boolean value) {
      ablageposFrei = value;
      if (value) {
         notifyAll();
      }
   }

   // Signalzustand auf ,value, setzen
   public synchronized void setProduktablageErlaubt(boolean value) {
      produktAbgelegt = value;
      if (value) {
         notifyAll();
      }
   }
  
   // Signalzustand auf ,value, setzen
   public synchronized void setProduktAbgelegt (boolean value) {
      produktAbgelegt = value;
      if (value) {
         notifyAll();
      }
   }
}