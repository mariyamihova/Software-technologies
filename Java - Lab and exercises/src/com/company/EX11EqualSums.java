package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class EX11EqualSums {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays.stream(
                scan.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt)
                .toArray();

        ArrayList<Integer> equalSumsIndices = new ArrayList<>();

        Long sum = 0L;

        for (int number : numbers)
            sum += number;
        Long sumRight = sum;
        Long sumLeft = 0L;
        Boolean isEqualSum = false;

        for (int i = 0; i < numbers.length; i++) {
            sumRight -= numbers[i];
            if (sumLeft == sumRight) {
                equalSumsIndices.add(i);
                isEqualSum = true;
            }
            sumLeft += numbers[i];
        }
        if (isEqualSum) {
            for (int index : equalSumsIndices)
                System.out.println(index);
        } else
            System.out.println("no");
    }
}
