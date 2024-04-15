public class Main {
    public static void main(String[] args) {
        int length = args.length;
        System.out.println("Es sind " + length);
        System.out.println("Argumentenlaenge: ");
        char [] big_letters = new char[26];
        char [] small_letters = new char[26];
        for(int i = 0; i < 25; i++){
            big_letters[i] = (char) ('A' + i);
            small_letters[i] = (char) ('a' + i);
        }

        int[] count_letters = new int[26];

        for(String arg : args){
            System.out.println(arg.length());
            for(int i = 0; i < arg.length(); i++){
                char c = arg.charAt(i);
                for (int j = 0; j < 26; j++){
                    if(c == big_letters[j]){
                        count_letters[j]++;
                    } else if (c == small_letters[j]) {
                        count_letters[j]++;
                    }
                }
            }
        }

        for(int i = 0; i < 26; i++){
            if(count_letters[i] != 0){
                System.out.println(big_letters[i] + ": " + count_letters[i]);
            }
        }

    }
}