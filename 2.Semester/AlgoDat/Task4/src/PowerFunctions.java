import task1.Counter;

public class PowerFunctions{
    private static Counter powerCounter = new Counter();
    private static Counter fastPowerCounter = new Counter();
            
    public static double Power(double x, int n){
        double res = x;
        for(int i = 0; i < n - 1 ; i++){
           res *= x;
           powerCounter.increment();
        }
        return res;
    }

    public static double fastPower(double x, int n){
        //Square and Multiply algo
        double result = 1;
        String binary = Integer.toBinaryString(n);
        for(int i = binary.length() - 1; i >= 0; i--){
            fastPowerCounter.increment();
            if(binary.charAt(i) == '1'){
                result *= x;
            }
            x *= x;
        }
        return result;
    }

    public static void resetCounters(){
        powerCounter.reset();
        fastPowerCounter.reset();
    }

    public static int getCountPower(){
        return powerCounter.get();
    }

    public static int getFastPower(){
        return fastPowerCounter.get();
    }
}