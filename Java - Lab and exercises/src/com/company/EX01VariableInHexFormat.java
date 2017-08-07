package com.company;

import java.util.Scanner;

public class EX01VariableInHexFormat {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        String toBeConverted=scanner.nextLine();

        int convertedNum=Integer.parseInt(toBeConverted, 16);
        System.out.println(convertedNum);
    }
}
