package com.company;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;
import java.util.List;

public class AverageGrades {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        List<Student>students=new ArrayList<>();

        int studentsCount=Integer.parseInt(scan.nextLine());

        for(int i=0;i<studentsCount;i++){

            String[] tokens=scan.nextLine().split(" ");
            String name=tokens[0];
            Double[]grades= Arrays.stream(tokens).skip(1).map(a->Double.parseDouble(a)).toArray(Double[]::new);

            Student student=new Student(){{
                setName(name);
                setGrades(Arrays.asList(grades));
            }};
            students.add(student);

        }
        Student[] filtered=students.stream().filter(s->s.getAverageGrade()>=5.00).sorted((a,b)->{
            int result=a.getName().compareTo(b.getName());
            if(result==0){
                result=Double.compare(b.getAverageGrade(),a.getAverageGrade());
            }
            return result;
        }).toArray(Student[]::new);

        for (Student student : filtered) {
            System.out.printf("% -> %.2f%n",student.getName(),student.getAverageGrade());
        }
    }

}
