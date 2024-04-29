public class PowerFunctions_test {
    public static void main(String[] args) {
        PowerFunctions fast_power = new PowerFunctions();
        PowerFunctions normal_power = new PowerFunctions();
        fast_power.resetCounters();
        normal_power.resetCounters();
        int i = 0;
        for(i = 0; i < 1000; i++){
            double x = Math.random();
            int random_n = (int)(1000 * x);
            int random_x = (int) (2 * x);
            System.out.println(normal_power.Power(random_x, random_n));
            System.out.println(fast_power.fastPower(random_x, random_n));
        }
        double normal_AVG = normal_power.getCountPower() / i;
        double fast_AVG = fast_power.getFastPower() / i;
        System.out.println("Fast Power AVG: " + fast_AVG + "\n normal Power AVG: " + normal_AVG);
    }
}