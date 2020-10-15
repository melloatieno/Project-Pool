<?php
require_once "dbconfig.php";
 
 if(isset($_POST['submit'])){
    $year = $_POST['year'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $student = $_POST['student'];
    $regnumber = $_POST['regnumber'];
    $supervisor = $_POST['supervisor'];
    $document = $_POST['document'];
    $link = $_POST['link'];

    $sql = "INSERT INTO projectsubmitted(yr,category,title,student,regnumber,supervisor,document,link)VALUES('$year','$category','$title','$student','$regnumber','$supervisor','$document','$link');";

    $check = mysqli_query($db, $sql);

    if($check){
        header("location:projects.php");
    }
    else{
        echo "error occured".$sql;
    }
     
   

 }
?>