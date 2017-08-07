package com.company;

import java.util.Scanner;



public class EX06CompareCharArrays {
    public static void main(String[] args) {
        Scanner scan= new Scanner(System.in);
        String[] firstArray=scan.nextLine().split("\\s");
        String[] secondArray=scan.nextLine().split("\\s");

        if(firstArray.length>secondArray.length){
            String []temp=firstArray;
            firstArray=secondArray;
            secondArray=temp;
        }else if(secondArray.length==firstArray.length){
            for(int i=0;i<firstArray.length;i++){
                if(firstArray[i].charAt(0)>secondArray[i].charAt(0)){
                    String []temp=firstArray;
                    firstArray=secondArray;
                    secondArray=temp;
                    break;
                }
            }
        }
        printArray(firstArray);
        printArray(secondArray);
    }
    public static void printArray(String[] array) {
        for (String element : array)
            System.out.print(element);
        System.out.println();
    }
}
