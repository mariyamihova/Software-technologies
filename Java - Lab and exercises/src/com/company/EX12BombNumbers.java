package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class EX12BombNumbers {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] numbers = Arrays.stream(
                scan.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt)
                .toArray();
        int[] bombNumandPower=Arrays.stream(
                scan.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt)
                .toArray();
        ArrayList<Integer> remainingNums = new ArrayList<>();
        int bombNum=bombNumandPower[0];
        int power=bombNumandPower[1];
        int index=0;

        for(int i=0;i<numbers.length;i++){
            remainingNums.add(numbers[i]);

        }
        while(remainingNums.indexOf(bombNum)!=-1){
            index=remainingNums.indexOf(bombNum);
            int fromIndex=Math.max(0,index-power);
            int toIndex=Math.min(index+power,numbers.length-1);
            for(int i=fromIndex;i<=toIndex;i++){
                remainingNums.remove(fromIndex);
            }
        }



        Long sum=0l;

        for (int num:remainingNums) {
            sum+=num;

        }
        System.out.println(sum);
    }
}