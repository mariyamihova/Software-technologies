package com.company;
import java.util.Scanner;
public class L05SymmetricNumbers {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int n = scan.nextInt();
        for (int i = 1; i <= n; i++){
            String numToString=Integer.toString(i);
            String reversedNum= new StringBuffer(numToString).reverse().toString();
            if(numToString.equals(reversedNum)){
                System.out.print(numToString+" ");
            }
        }
    }
}
