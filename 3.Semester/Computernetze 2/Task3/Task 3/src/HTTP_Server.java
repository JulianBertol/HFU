import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class HTTP_Server {
    public static void main(String[] args) {
        try (ServerSocket serverSocket = new ServerSocket(6789)) {
            System.out.println("Auf eingehende Verbindungen warten...");
            while (true) {
                try (Socket s = serverSocket.accept()) {
                    System.out.println("Verbunden mit: " + s.getRemoteSocketAddress());
                    String request = readText(s);
                    Date lastAccessTimestamp = parseCookie(request);
                    String response = generateResponse(lastAccessTimestamp);
                    sendText(s, response);
                } catch (IOException e) {
                    System.out.println("Fehler bei der Verbindung.");
                    e.printStackTrace();
                }
            }
        } catch (IOException e) {
            System.out.println("Fehler beim Erstellen des Sockets");
            e.printStackTrace();
        }
    }

    private static String readText(Socket s) throws IOException {
        BufferedReader in = new BufferedReader(new InputStreamReader(s.getInputStream()));
        StringBuilder sb = new StringBuilder();
        String line;
        while ((line = in.readLine()) != null && !line.isEmpty()) {
            sb.append(line).append("\r\n");
        }
        return sb.toString();
    }

    private static void sendText(Socket s, String response) {
        System.out.println("Durch Socket übertragen...");
        try (OutputStreamWriter osw = new OutputStreamWriter(s.getOutputStream())) {
            osw.write(response);
            osw.flush();
        } catch (IOException e) {
            System.out.println("Fehler beim Übertragen über Socket");
            e.printStackTrace();
        }
    }

    private static Date parseCookie(String request) {
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy, HH:mm:ss");
        String[] lines = request.split("\r\n");
        for (String line : lines) {
            if (line.startsWith("Cookie:")) {
                String[] cookies = line.substring(7).split(";");
                for (String cookie : cookies) {
                    String[] parts = cookie.trim().split("=");
                    if (parts.length == 2 && "lastAccess".equals(parts[0])) {
                        try {
                            return dateFormat.parse(parts[1]);
                        } catch (ParseException e) {
                            System.out.println("Fehler beim Parsen des Cookie-Datums");
                        }
                    }
                }
            }
        }
        return null; // kein gültiges Zugriffsdatum gefunden
    }

    private static String generateResponse(Date lastAccessTimestamp) {
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy, HH:mm:ss");
        Date currentDate = new Date();

        StringBuilder response = new StringBuilder();

        if (lastAccessTimestamp == null) {
            response.append("Set-Cookie: lastAccess=" + dateFormat.format(currentDate) + "\r\n");
            response.append("\r\n");
            response.append("Hallo!  Es ist der " + dateFormat.format(currentDate) + ". Sie sind zum ersten Mal auf diesem Server gelandet.");
        } else {
            response.append("Set-Cookie: lastAccess=" + dateFormat.format(currentDate) + "\r\n");
            response.append("\r\n");
            response.append("Welcome back! Es ist der " + dateFormat.format(currentDate) + ". Ihr letzter Zugriff war am " + dateFormat.format(lastAccessTimestamp));
        }
        return response.toString();
    }
}
