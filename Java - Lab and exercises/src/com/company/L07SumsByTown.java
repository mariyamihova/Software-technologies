package com.company;

import java.util.Scanner;
import java.util.TreeMap;

public class L07SumsByTown {
    public static void main(String[] args) {

        TreeMap<String, Double> sumsByTown = new TreeMap<>();
        Scanner scanner=new Scanner(System.in);

        int num=Integer.parseInt(scanner.nextLine());
        for (int i = 0; i < num; i++) {
            String[] tokens = scanner.nextLine().split("\\|");

            String town = tokens[0].trim();
            double income = Double.parseDouble(tokens[1].trim());

            if (sumsByTown.containsKey(town)) {
                sumsByTown.put(town, sumsByTown.get(town) + income);
            } else {
                sumsByTown.put(town, income);
            }
        }
        for (String key : sumsByTown.keySet()) {
            System.out.println(key + " -> " + sumsByTown.get(key));
        }

    }
}
