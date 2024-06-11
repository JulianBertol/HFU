import merge.Mergesort_objects;

public class Anwendungsbeispiel{
   public static void main(String[] args) {
      Zahlungsmittel geld[]= {new USD_Muenze(0.10), new USD_Schein(20),   new SFR_Schein(5),
                              new SFR_Muenze(0.50), new USD_Muenze(0.50), new EUR_Schein(50),
                              new USD_Schein(100),  new USD_Muenze(0.2),  new USD_Muenze(0.25),
                              new EUR_Muenze(0.01), new SFR_Schein(200),  new USD_Schein(100),
                              new EUR_Muenze(2),    new EUR_Schein(5),    new USD_Muenze(0.25),
                              new SFR_Muenze(0.10), new SFR_Muenze(0.01), new USD_Muenze(0.50),
                              new USD_Schein(100),  new USD_Schein(100),  new USD_Muenze(0.2),
                              new USD_Muenze(0.01), new SFR_Schein(20),   new SFR_Muenze(0.50),
                              new USD_Muenze(0.50), new EUR_Schein(50),   new USD_Schein(5),
		              new EUR_Muenze(0.50), new EUR_Muenze(0.01), new SFR_Schein(10),
		              new SFR_Schein(20),   new SFR_Muenze(0.50), new SFR_Muenze(0.02)};

      int validcount = 0;
      int invalidcount = 0;

       for (Zahlungsmittel z : geld) {
            if(z.wertIstGueltig()) {
                validcount++; //Zählen der Validen Werte
                System.out.println("Wert: " + z.getWert() + " Währung: " + z.getWaehrung()); //Ausgabe der Validen Werte
            }
            else
                invalidcount ++; //Zählen der ungültigen werte
       }

       //Array nur mit Validen Werten
       Zahlungsmittel [] new_geld = new Zahlungsmittel[validcount];
       int i = 0;
       for(Zahlungsmittel z : geld){
           if(z.wertIstGueltig()){
               new_geld[i] = z;
               i++;
           }
       }

       //Ausgabe der Anzahl der ungültigen Zahlungsmittel
       System.out.println("Anzahl der ungültigen Zahlungsmittel: " + invalidcount);

       double Count_Eur = 0;
       double Count_SFR = 0;
       double Count_USD = 0;
       double ges_gewicht_muenze = 0;
       double gesflaeche_schein = 0;
       double ges_dicke_muenze = 0;

       System.out.println(("---------------------------------------------------------\n Ausgabe neue Array:"));
       for(Zahlungsmittel z : new_geld){
           System.out.println("Wert: " + z.getWert() + " Währung: " + z.getWaehrung());
           //Zählen der Summe der Währungen
           if(z.getWaehrung() == "EUR"){
               Count_Eur += z.getWert();
           } else if (z.getWaehrung() == "USD") {
               Count_USD += z.getWert();
           }else if(z.getWaehrung() == "SFR"){
               Count_SFR += z.getWert();
           }

           //Zählen des Gewichts der Münzen

           if(z instanceof Muenze){
               Muenze m = (Muenze) z;
               ges_gewicht_muenze += m.getGewicht();
               ges_dicke_muenze += m.getDicke();
           }

           if(z instanceof Schein){
               Schein s = (Schein) z;
               gesflaeche_schein += s.getBreite() * s.getLaenge();
           }
       }
       //Ausgabe der Summe der Währungen
       System.out.println("Summe Euro:  " + Count_Eur + " Summe USD: " + Count_USD + " Summe SFR: " + Count_SFR);
       //Ausgabe des gesamtgewichtes der Münzen
       System.out.println("Gesamtgewicht Münzen: " + ges_gewicht_muenze);
       //Ausgabe der Gesamtfläche der Scheine
       System.out.println("Gesamtflaeche der Scheine: "+ gesflaeche_schein);
       //Ausgabe der Höhe des Stapels der Münzen
       System.out.println("Hoehe des Stapels der Münzen: " + ges_dicke_muenze);

       //Mergesort
       Mergesort_objects mergesort = new Mergesort_objects();
       mergesort.sort(new_geld);
       //Ausgabe des Sortierten Arrays
       System.out.println("Sortiertes New Geld Array:");
       for(Zahlungsmittel z : new_geld){
           System.out.println(z.getWert());
       }
   }
}
