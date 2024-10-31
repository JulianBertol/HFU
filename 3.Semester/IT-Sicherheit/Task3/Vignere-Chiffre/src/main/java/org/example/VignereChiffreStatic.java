package org.example;

import java.util.Arrays; import java.util.HashSet;
public class VignereChiffreStatic {
    static String[] keywords = { "die", "der", "und", "in", "zu", "den", "das", "nicht", "von", "sie", "ist", "des",
            "sich", "mit", "dem", "dass", "er", "es", "ein", "ich", "auf", "so", "eine", "auch", "als", "an", "nach",
            "wie", "im", "für", "fuer", "fur", "kai" };
    static HashSet<String> germanKeywordsSet = new HashSet<String>();
    static double threshold = 0.3; // Prozentsatz der Wörter, die erkannt werden müssen
    public static void main(String[] args) {
        String s = "Studieren an der HFU ist toll.";
        String key = "TOLL";
        System.out.println("Testen der Verschlüsselung mit: " + s + " und Schlüssel: " + key);
        String encrypted = encrypt(s, "TOLL");
        System.out.println(s);
        System.out.println(encrypted + " (verschlüsselt)");
        System.out.println(decrypt(encrypted, "TOLL") + " (entschlüsselt)");
        System.out.println();
        System.out.println("Ist der Text (vermutlich) lesbar?: " + isProbablyReadable(s));
        System.out.println();
        System.out.println("Nun geht es an die Aufgabe: Versuchen Sie alle möglichen Schlüssel. Erweitern Sie den Code unten");
// Hinweis: Permutationen der Länge zwei aus der Menge {A,B,C}
        String[] buchstaben = { "A", "B", "C" };
        for (String buchstabe1 : buchstaben) {
            for (String buchstabe2 : buchstaben) {
                System.out.println("Hier könnten Sie mit dem Schlüssel " + buchstabe1 + buchstabe2 + " testen");
                String encrypted_test = encrypt("Dies ist ein test",  buchstabe1+buchstabe2);
                System.out.println(encrypted_test + " (verschlüsselt)");

                System.out.println(decrypt(encrypted_test, buchstabe1+buchstabe2) + " (entschlüsselt)");
                // Testen Sie: Ist der entschlüsselte Text lebar? Wenn ja: Geben Sie Schlüssel und Text aus.
            }
        }

        String encrypt_text = encrypt("Hallo liebe mitstudierende!", "tedi");
        System.out.println(encrypt_text);

        decrypt_bruteforce("dies ist ein test");
    }
    /**
     * String s verschlüsseln
     * @param text Nachricht im Klartext
     * @param keyForEncryption Schlüssel
     * @return Verschlüsselte Nachricht
     */
    public static String encrypt(String text, String keyForEncryption) {
        text = text.toUpperCase(); // alles Grossbuchstaben
        char[] chars = text.toCharArray();
        char[] key = keyForEncryption.toUpperCase().toCharArray();
        int keyLength = key.length;
        for (int i = 0; i < chars.length; i++) {
            char charToShift = key[i % keyLength];
            chars[i] = shift(chars[i], charToShift); // Sonderzeichen ignorieren. Schlüsselindex weiterzählen
        }
        return String.valueOf(chars); // wieder in String wandeln
    }
    /**
     * String s entschlüsseln
     * @param text Nachricht als Chiffrat
     * @param keyForDecryption Schlüssel
     * @return Entschlüsselte Nachricht
     */
    public static String decrypt(String text, String keyForDecryption) {
        text = text.toUpperCase(); // alles Grossbuchstaben
        char[] chars = text.toCharArray();
        char[] key = keyForDecryption.toUpperCase().toCharArray();
        int keyLength = key.length;
        for (int i = 0; i < text.length(); i++) {
            char charToShift = key[i % keyLength];
            chars[i] = deShift(chars[i], charToShift);
        }
// wieder in String wandeln
        return String.valueOf(chars);
    }
    private static char shift(char ch, char k) {
        if (ch >= 'A' && ch <= 'Z') { // Sonderzeichen nicht behandeln
            return (char) (((ch - 'A') + (k - 'A')) % 26 + 'A');
        } else {
            return ch;
        }
    }
    private static char deShift(char ch, char k) {
        if (ch >= 'A' && ch <= 'Z') { // Sonderzeichen nicht behandeln
            return (char) (((ch - 'A') - (k - 'A') + 26) % 26 + 'A');
        } else {
            return ch;
        }
    }
    /**
     * Wie häufig kommt einer der in keyword definierten Wörter im Text vor?
     * @param s Der Text
     * @return Anzahl der Übereinstimmungen
     */
    protected static int occurencesOfKeywords(String s) {
        if (germanKeywordsSet.isEmpty()) // Array in Set überführen
            germanKeywordsSet.addAll(Arrays.asList(keywords)); // sofern nicht bereits geschehen
        String[] words = s.toLowerCase().replaceAll("\\.", "").split(" ");
        int hits = 0;
        for (String word : words) {
            if (germanKeywordsSet.contains(word))
                hits++;
        }
        return hits;
    }
    /**
     * Ist der Text lesbar?
     * @param s Der Text zum Testen
     * @return wahr, wenn der Text vermutlich lesbar ist
     */
    public static boolean isProbablyReadable(String s) {
        int hits = occurencesOfKeywords(s);
        int word = s.toLowerCase().replaceAll("\\.", "").split(" ").length;
        double percentage = ((double) hits) / word;
        return percentage >= threshold;
    }
    
    //bruteforce
    public static void decrypt_bruteforce(String text) {
        text = text.toUpperCase(); // alles Grossbuchstaben
        char[] alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".toCharArray();
        int alphabetlength = alphabet.length;
        int combinationlength = 4;

        for (int i = 0; i < Math.pow(alphabetlength, combinationlength); i++) {

            StringBuilder combination = new StringBuilder();

            // Berechne die Zeichen für jede Position in der Kombination
            int temp = i;
            for (int j = 0; j < combinationlength; j++) {
                int index = temp % alphabetlength; // Index im Alphabet
                combination.insert(0, alphabet[index]); // Zeichen an der Position einfügen
                temp /= alphabetlength;

            }
            //System.out.println(combination.toString());
            if (isProbablyReadable(decrypt("HOE BHEKHH KXQD JOCDF.", combination.toString()))) {
                System.out.println(decrypt("HOE BHEKHH KXQD JOCDF.", combination.toString()));
            }
        }
    }
}
