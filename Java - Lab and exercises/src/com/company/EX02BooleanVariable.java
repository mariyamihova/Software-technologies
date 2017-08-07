package com.company;

import java.util.Scanner;

public class EX02BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner=new Scanner(System.in);
        String variable=scanner.nextLine();

        Boolean booleanVar=Boolean.parseBoolean(variable);
        if(booleanVar){
            System.out.println("Yes");
        }else{
            System.out.println("No");
        }
    }
}