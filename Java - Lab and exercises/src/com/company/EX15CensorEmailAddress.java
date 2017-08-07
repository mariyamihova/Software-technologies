package com.company;

import java.util.Scanner;

public class EX15CensorEmailAddress {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        String email = scan.nextLine();
        String text=scan.nextLine();

        String censoredEmail=censorEmail(email);

        String censoredText=text.replace(email,censoredEmail);
        System.out.println(censoredText);

    }
    public static String censorEmail(String text){
        StringBuilder sb=new StringBuilder(text.length());
        int index=text.indexOf('@');
        for (int i=0; i<index;i++){
            sb.append('*');
        }
        sb.append(text.substring(index));
        return sb.toString();
    }
}
