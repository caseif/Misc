import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;
import java.util.stream.IntStream;

public class DataSet {

    private double[] values;
    
    public DataSet(double[] values) {
        this.values = new double[values.length];
        System.arraycopy(values, 0, this.values, 0, values.length);
        Arrays.sort(this.values);
    }

    public double median() {
        return median(values);
    }

    public double lowerQuartile() {
        double[] half = new double[(values.length + 1) / 2];
        System.arraycopy(values, 0, half, 0, (values.length + 1) / 2);
        return median(half);
    }

    public double upperQuartile() {
        double[] half = new double[(values.length + 1) / 2];
        System.arraycopy(values, values.length / 2, half, 0, (values.length + 1) / 2);
        return median(half);
    }

    public double lowerExtreme() {
        return values[0];
    }

    public double upperExtreme() {
        return values[values.length - 1];
    }

    public double mean() {
        return Arrays.stream(values).sum() / values.length;
    }
    
    public double stdDev() {
        double mean = mean();
        double[] clone = new double[values.length];
        System.arraycopy(values, 0, clone, 0, values.length);
        return Math.sqrt(Arrays.stream(clone).map(d -> Math.pow(d - mean, 2)).sum() / (values.length - 1));
    }
    
    public double mode() {
        Map<Double, Integer> counts = new HashMap<Double, Integer>();
        Arrays.stream(values).forEach(d -> counts.put(d, (counts.containsKey(d) ? counts.get(d) : 0) + 1));
        double mode = -1;
        int max = 1;
        for (Map.Entry<Double, Integer> e : counts.entrySet()) {
            if (e.getValue() > max) {
                max = e.getValue();
                mode = e.getKey();
            }
        }
        return mode;
    }

    private static double median(double[] values) {
        if (values.length == 0) {
            throw new IllegalArgumentException("Cannot get quartile of empty data set");
        }
        return values.length % 2 == 1
                ? values[values.length / 2]
                : (values[values.length / 2 - 1] + values[values.length / 2]) / 2f;
    }

}
