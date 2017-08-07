package com.company;

import java.util.Scanner;

public class EX16URLParser {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String input = scan.nextLine();

        String protocol = "";
        String server = "";
        String resource = "";

        int protocolIndex = input.indexOf("://");
        if (protocolIndex != -1) {
            protocol = input.substring(0, protocolIndex);
            input = input.substring(protocolIndex + 3);
        }

        int serverIndex = input.indexOf("/");
        if (serverIndex != -1) {
            server = input.substring(0, serverIndex);
            resource = input.substring(serverIndex + 1);
        } else {
            server = input;
        }
        System.out.printf("[protocol] = \"%s\"\n"
                        + "[server] = \"%s\"\n"
                        + "[resource] = \"%s\"\n",
                protocol, server, resource.trim());
    }
}