package com.company;

import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
public class EX18Phonebook {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        Map<String, String> phonebook = new HashMap<>();

         String inputLine=scan.nextLine();

         while (!inputLine.equals("END")){

         String[] info=inputLine.split("\\s");
         String command=info[0];
         String name=info[1];

if(command.equals("A")){
    String phone=info[2];
    phonebook.put(name,phone);
}else if(command.equals("S")){
    if(phonebook.containsKey(name)){
        System.out.printf("%s -> %s\n", name,phonebook.get(name));
    }else{
        System.out.printf("Contact %s does not exist.\n", name);
    }
}
             inputLine=scan.nextLine();
         }
    }
}