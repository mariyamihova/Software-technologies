package com.company;

import java.util.Arrays;
import java.util.Scanner;

public class EX22IntersectionOfCircles {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        int[] arrayFirst = Arrays.stream(scan.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt).toArray();

        int[] arraySecond = Arrays.stream(scan.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt).toArray();

        Circle circleFirst = new Circle(arrayFirst[0], arrayFirst[1], arrayFirst[2]);
        Circle circleSec = new Circle(arraySecond[0], arraySecond[1], arraySecond[2]);

        if(circlesIntersect(circleFirst,circleSec)){
            System.out.println("Yes");
        }else{
            System.out.println("No");
        }

    }

    private static boolean circlesIntersect(Circle c1, Circle c2) {
        double deltaX = c1.x - c2.x;
        double deltaY = c1.y - c2.y;
        double distanceCircleCenters = Math.sqrt(Math.pow(deltaX, 2) + Math.pow(deltaY, 2));
        return distanceCircleCenters <= c1.radius + c2.radius;
    }

    static class Circle {
        private int x;
        private int y;
        private int radius;

        public Circle(int x, int y, int radius) {
            this.x = x;
            this.y = y;
            this.radius = radius;
        }
    }
}
