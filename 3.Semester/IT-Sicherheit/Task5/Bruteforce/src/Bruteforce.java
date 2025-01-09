import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.ArrayList;
import java.util.List;

public class Bruteforce {
    private final String[] Alphabet = {
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P",
            "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
    };
    private final String brute_val = "2B85116183BF5D56056CAA0DDFD0DF86";
    private boolean found = false;

    public void bruteforce() throws NoSuchAlgorithmException {
        MessageDigest md5 = MessageDigest.getInstance("MD5");

        int length = 1; // Start mit Länge 1
        while (!found) {
            List<String> combinations = generateCombinations(length); // Alle Kombinationen der aktuellen Länge
            for (String toHash : combinations) {
                md5.update(toHash.getBytes()); // MessageDigest erwartet ein Byte-Array
                byte[] hash = md5.digest(); // Hash als Byte-Array
                String hexValue = byteArrayToHex(hash); // Byte-Array in Hexadezimalwert konvertieren
                if (hexValue.equals(brute_val)) {
                    System.out.println("Found: " + toHash);
                    found = true;
                    break;
                } else {
                    System.out.println("Tested: " + toHash);
                }
            }
            length++; // Länge erhöhen, falls nichts gefunden wurde
        }
    }

    // Methode zur Generierung aller Kombinationen einer bestimmten Länge
    private List<String> generateCombinations(int length) {
        List<String> combinations = new ArrayList<>();
        generateCombinationsRecursive("", length, combinations);
        return combinations;
    }

    // Rekursive Methode zur Generierung der Kombinationen
    private void generateCombinationsRecursive(String prefix, int length, List<String> combinations) {
        if (length == 0) {
            combinations.add(prefix);
            return;
        }
        for (String letter : Alphabet) {
            generateCombinationsRecursive(prefix + letter, length - 1, combinations);
        }
    }

    // Methode zur Konvertierung eines Byte-Arrays in einen Hexadezimal-String
    public static String byteArrayToHex(byte[] a) {
        StringBuilder sb = new StringBuilder(a.length * 2);
        for (byte b : a)
            sb.append(String.format("%02x", b));
        return sb.toString().toUpperCase();
    }

    public static void main(String[] args) throws NoSuchAlgorithmException {
        Bruteforce bf = new Bruteforce();
        bf.bruteforce();
    }
}
