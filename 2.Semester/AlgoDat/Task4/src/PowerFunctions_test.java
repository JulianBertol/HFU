public class PowerFunctions_test {
    public static void main(String[] args) {
        double x = Math.random();
        int random_n = (int)(1000 * x);
        int random_x = (int) (2 * x);
        System.out.println(random_x);
        PowerFunctions a = new PowerFunctions();
        System.out.println(a.Power(5, 5));
        System.out.println(a.fastPower(5, 5));
        for(int i = 0; i < 1000; i++){
           System.out.println(a.Power(random_x, random_n));
           System.out.println(a.fastPower(random_x, random_n));
        }
    }
}