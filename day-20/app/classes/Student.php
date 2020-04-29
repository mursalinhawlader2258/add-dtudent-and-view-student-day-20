<?php
namespace App\classes;


class Student
{
  public function saveStudentInfo($data){
   $link=mysqli_connect('localhost','root','','bitm');
   $sql = "INSERT INTO students (name, email, mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

      If( mysqli_query($link, $sql)){
         $message= "Student info save successfully";
         return $message;

      } else{
          die('Queary problem'.mysqli_error($link));
      }
  }
  public function getAllStudentInfo(){
      $link=mysqli_connect('localhost','root','','bitm');
      $sql = "SELECT * FROM students";

      If( mysqli_query($link, $sql)){
          $qureyResult=mysqli_query($link, $sql);
          return $qureyResult;
      } else{
          die('Queary problem'.mysqli_error($link));
      }
  }
}