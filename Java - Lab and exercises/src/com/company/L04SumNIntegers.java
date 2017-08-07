package com.company;
import java.util.Scanner;
public class L04SumNIntegers {
    public static void main(String[] args) {
Scanner scan=new Scanner(System.in);

int num=scan.nextInt(); //Integer.parseInt(scan.nextLine());
long sum=0;
for (int i=0;i<num;i++){
    sum+=scan.nextInt();
}
System.out.println("Sum = "+sum);
    }
}
