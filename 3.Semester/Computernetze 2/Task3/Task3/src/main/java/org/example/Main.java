package org.example;

import java.io.*;
import java.net.*;
import java.text.SimpleDateFormat;
import java.util.Date;

public class Main {
    public static void main(String[] args) {
        try (ServerSocket serverSocket = new ServerSocket(6789)) {
            System.out.println("Server gestartet. Warte auf eingehende Verbindungen...");

            while (true) {
                try (Socket clientSocket = serverSocket.accept()) {
                    System.out.println("Verbindung hergestellt mit: " + clientSocket.getInetAddress());

                    // Anfrage lesen
                    String request = readText(clientSocket);

                    // Cookie parsen und aktuellen Timestamp erhalten
                    String lastAccessCookie = parseCookie(request, "lastAccess");
                    long currentTime = System.currentTimeMillis();
                    String response;

                    if (lastAccessCookie != null) {
                        // Zeit seit letztem Zugriff berechnen
                        long lastAccessTime = Long.parseLong(lastAccessCookie);
                        long elapsedTime = (currentTime - lastAccessTime) / 1000; // in Sekunden

                        response = generateResponse(lastAccessTime, elapsedTime);
                    } else {
                        response = "Hallo! Es ist das erste Mal, dass Sie diesen Server besuchen.\n";
                    }

                    // Antwort an den Client senden, einschließlich Setzen des Cookies
                    sendText(clientSocket, response + "\nSet-Cookie: lastAccess=" + currentTime + "; Path=/\n");
                } catch (Exception e) {
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

    private static void sendText(Socket s, String text) {
        try {
            PrintWriter out = new PrintWriter(s.getOutputStream(), true);
            out.println("HTTP/1.1 200 OK");
            out.println("Content-Type: text/plain; charset=UTF-8");
            out.println("Content-Length: " + text.length());
            out.println();
            out.print(text);
            out.flush();
        } catch (IOException e) {
            System.out.println("Fehler beim Übertragen über Socket");
            e.printStackTrace();
        }
    }

    private static String parseCookie(String request, String cookieName) {
        String[] lines = request.split("\r\n");
        for (String line : lines) {
            if (line.startsWith("Cookie:")) {
                String[] cookies = line.substring(7).split(";");
                for (String cookie : cookies) {
                    String[] parts = cookie.trim().split("=");
                    if (parts.length == 2 && parts[0].equals(cookieName)) {
                        return parts[1];
                    }
                }
            }
        }
        return null;
    }

    private static String generateResponse(long lastAccessTime, long elapsedTime) {
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd.MM.yyyy, HH:mm:ss");
        Date lastAccessDate = new Date(lastAccessTime);
        Date currentDate = new Date();

        return "Hallo! Es ist der " + dateFormat.format(currentDate) + ".\n" +
                "Der letzte Zugriff erfolgte am " + dateFormat.format(lastAccessDate) + ".\n" +
                "Es sind " + elapsedTime + " Sekunden seit dem letzten Zugriff vergangen.";
    }
}
