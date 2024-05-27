public class Mergesort_objects {
    private static void merge(Comparable[] x, Comparable[] left, Comparable[] right) {
        int i = 0, j = 0, k = 0;
        while (i < left.length && j < right.length) {
            if (left[i].compareTo(right[j]) <= 0) {
                x[k++] = left[i++];
            } else {
                x[k++] = right[j++];
            }
        }

        while (i < left.length) {
            x[k++] = left[i++];
        }

        while (j < right.length) {
            x[k++] = right[j++];
        }
    }


    public void sort(Comparable[] x){
        if (x.length < 2)
            return;

        int mid = x.length / 2;
        Comparable[] left = new Comparable[mid];
        Comparable[] right = new Comparable[x.length - mid];

        for (int i = 0; i < mid; i++) {
            left[i] = x[i];
        }

        for (int i = mid; i < x.length; i++) {
            right[i - mid] = x[i];
        }

        sort(left);
        sort(right);
        merge(x, left, right);


    }
}