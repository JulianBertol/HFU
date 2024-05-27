package bruch;

public class Bruch implements Comparable<Bruch> {
    private int numerator, denominator;

    public Bruch(int a, int b) {
        this.numerator = a;
        this.denominator = b;
        check();
    }

    public void check() {
        if (numerator == 0 || denominator == 0) {
            throw new IllegalArgumentException("0 is not allowed!");
        }
    }

    public String get() {
        return numerator + " / " + denominator;
    }

    public int ggt(int a, int b) {
        if (a < 0) // für Minus werte
            a *= -1;
        if (b < 0)
            b *= -1;

        if (b > a)
            return ggt(b, a);
        else
            return (b == 0) ? a : ggt(b, a % b);
    }

    public void add(Bruch b) {
        this.numerator = this.numerator * b.denominator + b.numerator * this.denominator;
        this.denominator = this.denominator * b.denominator;
        int ggt = ggt(this.numerator, this.denominator);
        this.numerator /= ggt;
        this.denominator /= ggt;
    }

    public void multi(Bruch b) {
        this.numerator = this.numerator * b.numerator;
        this.denominator = this.denominator * b.denominator;
        int ggt = ggt(this.numerator, this.denominator);
        this.numerator /= ggt;
        this.denominator /= ggt;
    }

    public void div(Bruch b) {
        this.numerator = this.numerator * b.denominator;
        this.denominator = this.denominator * b.numerator;
        int ggt = ggt(this.numerator, this.denominator);
        this.numerator /= ggt;
        this.denominator /= ggt;
    }

    public void sub(Bruch b) {
        this.numerator = this.numerator * b.denominator - b.numerator * this.denominator;
        this.denominator = this.denominator * b.denominator;
        int ggt = ggt(this.numerator, this.denominator);
        this.numerator /= ggt;
        this.denominator /= ggt;
    }

    public void e(int n) {
        Bruch result = new Bruch(1, 1);
        Bruch factorial = new Bruch(1, 1);
        for (int i = 1; i < n; i++) {
            factorial.multi(new Bruch(1, i));
            result.add(factorial);
        }
        this.numerator = result.numerator;
        this.denominator = result.denominator;
    }

    @Override
    public int compareTo(Bruch other) {
        // Implementieren Sie die Vergleichslogik für Brüche
        return Double.compare((double) this.numerator / this.denominator,
                (double) other.numerator / other.denominator);
    }

    @Override
    public String toString() {
        return numerator + "/" + denominator;
    }
}
