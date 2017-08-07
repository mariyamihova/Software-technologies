package com.company;

import java.util.Scanner;

public class EX05IntegerToHexAndBinary {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        int toBeConverted=scanner.nextInt();

        String  toHex= Integer.toHexString(toBeConverted);
        System.out.println(toHex.toUpperCase());
        String toBinary=Integer.toBinaryString(toBeConverted);
        System.out.println(toBinary);
    }
}
