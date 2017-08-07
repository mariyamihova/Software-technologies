package com.company;

import java.util.Scanner;

public class EX13ReverseString {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
       String toBeReversed = scan.nextLine();
        String reversed=new StringBuilder(toBeReversed).reverse().toString();
        System.out.println(reversed);
    }
}