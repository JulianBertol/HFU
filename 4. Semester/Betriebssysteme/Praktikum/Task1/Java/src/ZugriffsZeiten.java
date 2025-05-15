public class ZugriffsZeiten {
    public static void main(String[] args) {
        //double brauchst 8 Bytes, um zu berechnen wie viel double werte ich benötige gilt folgende Formel:
        //VerbügbareSpeicherBytes / 8
        long bytes = 6L * 1024 * 1024 * 1024; //in diesem Fall 4 gb
        int anzahl =(int) (bytes / 8);
        double[] zahlenFeld = new double[anzahl];

        while (true){
            double start = System.currentTimeMillis();
            for(double z : zahlenFeld){
                z = Math.random();
            }
            double end = System.currentTimeMillis();
            double result = end - start;
            System.out.println(result + " ms");
        }
    }
}
