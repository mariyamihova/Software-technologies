package com.company;
import java.util.Arrays;
import java.util.Scanner;
public class L06LargestThreeNums {
    public static void main(String[] args) {
Scanner scan=new Scanner(System.in);

String[] line=scan.nextLine().split(" ");

int[]numbers=new int[line.length];

for(int i=0;i<numbers.length;i++){
    numbers[i]=Integer.parseInt(line[i]);
}
        Arrays.sort(numbers);

        int count=0;

        for(int i=numbers.length-1;i>=0;i--){
               count++;

           System.out.print(numbers[i]+" ");
            if(count==3){
                break;
            }
        }
    }
}
