package com.company;

import java.util.Scanner;

public class EX10IndexOfLetters {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        char[] letters = scan.nextLine().toLowerCase().toCharArray();
        for (char letter : letters) {
            System.out.printf("%s -> %d\n", letter,
                    Character.valueOf(letter) - Character.valueOf('a'));
        }
    }
}
