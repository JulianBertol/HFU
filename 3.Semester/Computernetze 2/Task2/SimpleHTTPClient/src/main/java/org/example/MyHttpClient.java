package org.example;

import java.io.*;
import java.net.InetAddress;
import java.net.Socket;
import java.net.UnknownHostException;

public class MyHttpClient {

    public static InetAddress setAddress(String url) throws UnknownHostException {
        InetAddress address = InetAddress.getByName(url);
        System.out.println("IP-Adresse für " + url + ": " + address);
        return address;
    }

    public static Socket createSocket(InetAddress address, int port) throws IOException {
        Socket socket = new Socket(address, port);
        System.out.println("Socket erstellt: " + socket);
        return socket;
    }

    public static void sendmsg(Socket socket) throws IOException {
        OutputStream os = socket.getOutputStream();
        PrintWriter pw = new PrintWriter(os, true); //AutoFlush, ohne das funktioniert es nicht

        pw.println("GET / HTTP/1.1");
        pw.println("Host: " + socket.getInetAddress().getHostName());
        pw.println("Connection: close");
        pw.println();
        pw.println();
    }

    public static String receivemsg(Socket socket) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        String str;
        StringBuilder answer = new StringBuilder();

        while ((str = br.readLine()) != null) {
            answer.append(str);
            answer.append(System.lineSeparator()); //sorgt dafür, das untereinander geschrieben wird
        }

        System.out.println(answer.toString());

        return answer.toString();
    }

    public static Boolean getcookies(String answer){
        CharSequence setCookieString = "Set-Cookie";
        Boolean found = false;
        for (String singleLine : answer.split("\\r?\\n")) {
            if (singleLine.contains(setCookieString)) {
                System.out.println("Cookie-Zeile: " + singleLine);
                found = true;
            }
        }

        return found;

    }

    public static void main(String[] args) {
        InetAddress test = null;
        String answer = null;
        try {
            test = setAddress("www.google.de");
        } catch (UnknownHostException e) {
            System.err.println("Unbekannter Host: " + e.getMessage());
            return;
        }

        try (Socket socket = createSocket(test, 80)) {
            sendmsg(socket);
            answer = receivemsg(socket);
        } catch (IOException e) {
            System.err.println("IOException: " + e.getMessage());
        }

        Boolean cookies = getcookies(answer);
        if(!cookies)
            System.out.println("Cookies nicht gefuden");
    }
}