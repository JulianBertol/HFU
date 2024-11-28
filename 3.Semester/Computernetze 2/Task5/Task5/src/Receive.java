import java.io.IOException;
import java.io.ObjectInputStream;
import java.net.ServerSocket;
import java.net.Socket;

public class Receive {
    public static void Server() throws IOException, ClassNotFoundException {
        ServerSocket serverSocket = new ServerSocket(1337);
        System.out.println("Server läuft und wartet auf eine Verbindung...");
        Socket socket = serverSocket.accept();
        System.out.println("Verbindung von " + socket.getInetAddress() + " hergestellt.");
        ObjectInputStream objectInputStream = new ObjectInputStream(socket.getInputStream());
        Auto myAuto = (Auto) objectInputStream.readObject();
        System.out.println("Beschreibung: " + myAuto.holeBeschreibung());
        System.out.println("Spaßfaktor: " + myAuto.holeSpassfaktor());
        serverSocket.close();
    }
}