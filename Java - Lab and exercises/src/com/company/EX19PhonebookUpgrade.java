package com.company;

import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;

public class EX19PhonebookUpgrade {
    public static void main(String[] args) {
        java.util.Scanner scan = new Scanner(System.in);
        Map<String, String> phonebook = new TreeMap<>();
        String inputLine=scan.nextLine();
        while (!inputLine.equals("END")){

            String[] info=inputLine.split("\\s");
            String command=info[0];


            if(command.equals("A")){
                String name=info[1];
                String phone=info[2];
                phonebook.put(name,phone);
            }else if(command.equals("S")){
                String name=info[1];
                if(phonebook.containsKey(name)){
                    System.out.printf("%s -> %s\n", name,phonebook.get(name));
                }else{
                    System.out.printf("Contact %s does not exist.\n", name);
                }
            }else if(command.equals("ListAll")){
                for (String key : phonebook.keySet())
                    System.out.printf("%s -> %s\n", key, phonebook.get(key));
            }
            inputLine=scan.nextLine();
        }
    }
}

