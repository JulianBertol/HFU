public class Mergesort {
    private static void merge(Integer[] x, Integer[] left, Integer[] right) {
        int i = 0, j = 0, k = 0;
        while (i < left.length && j < right.length) {
            if (left[i] <= right[j]) {
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


    public void sort(Integer[] x){
        if (x.length < 2)
            return;

        int mid = x.length / 2;
        Integer[] left = new Integer[mid];
        Integer[] right = new Integer[x.length - mid];

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
