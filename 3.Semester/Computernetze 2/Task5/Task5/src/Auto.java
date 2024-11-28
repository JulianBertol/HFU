import java.io.IOException;
import java.io.Serializable;
import java.net.Socket;
import java.io.ObjectOutputStream;

public class Auto implements Serializable {
    private String farbe, marke;
    private int ps;
    private double gewichtInTonnen;

    public Auto(String farbe, int ps, double gewichtInTonnen, String marke) {
        this.farbe = farbe;
        this.ps = ps;
        this.gewichtInTonnen = gewichtInTonnen;
        this.marke = marke;
    }

    public String holeBeschreibung() {
        return "Ich bin ein " + farbe + "er " + marke;
    }

    public String holeSpassfaktor() {
        String result = "Ich wiege " + gewichtInTonnen + " Tonnen mit " + ps + " PS.";
        if (ps / gewichtInTonnen > 130) {
            result += " Ich bin sehr schnell!";
        } else if (ps / gewichtInTonnen > 80) {
            result += " Ich bin flott!";
        }
        return result;
    }

    public static void Sender() throws IOException {
        Auto myAuto = new Auto("Silbern", 86, 1.2, "Opel");
        Socket socket = new Socket("127.0.0.1", 1337);
        ObjectOutputStream outputStream = new ObjectOutputStream(socket.getOutputStream());

        outputStream.writeObject(myAuto);
        outputStream.flush();

        System.out.println("Auto wurde erfolgreich gesendet!");
        socket.close();
    }

    private static void startReceiver() {
        Thread receiverThread = new Thread(() -> {
            try {
                Receive.Server();
            } catch (Exception e) {
                System.err.println("Fehler beim Starten des Servers:");
            }
        });

        receiverThread.start();
    }

    public static void main(String[] args) throws IOException {
        startReceiver();
        Sender();
    }
}