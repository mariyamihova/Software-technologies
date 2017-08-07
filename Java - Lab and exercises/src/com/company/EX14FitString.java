package com.company;

        import java.util.Scanner;

public class EX14FitString {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String line = scan.nextLine();


        if (line.length() > 20) {
            line = line.substring(0, 20);

        } else if (line.length() < 20) {
            line = AddSymbol(line, 20);
        }
        System.out.println(line);
    }

    public static String AddSymbol(String line, int len) {
        StringBuilder sb = new StringBuilder(20);
        sb.append(line);
        for (int i = 0; i < len - line.length(); i++) {
            sb.append('*');
        }
        return sb.toString();
    }
}