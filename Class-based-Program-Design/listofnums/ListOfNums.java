package listofnums;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class ListOfNums {
    public static void main(String[] args) {
        int[] listOfNums = { 1, 2, 3, 4, 5, 6, 7, 8 };

        for (int i = 0; i < listOfNums.length; i++) {
            System.out.println("indexed array num => " + listOfNums[i]);
        }

        System.err.println("--------------");

        for (int num : listOfNums) {
            System.out.println("each array num => " + num);
        }

        System.err.println("------ List --------");

        List<Integer> nlist = new ArrayList<Integer>(Arrays.asList(1, 2, 3, 4, 5, 6, 7, 8));

        nlist.add(9);
        nlist.forEach(n -> System.out.println("forEach n => " + n));

        System.err.println("--------------");

        for (Integer n : nlist) {
            System.out.println("each n => " + n);
        }
    }
}
