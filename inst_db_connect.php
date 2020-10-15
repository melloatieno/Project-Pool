<?php
require_once "dbconfig.php";

if(isset($_POST['signup'])){
    
    $instname= $_POST['institutionname'];
    $email= $_POST['email'];
    $pswd= $_POST['password'];
    $password = MD5 ($pswd);


    $s = "SELECT * FROM InstitutionReg Where email = '$email'";
    $result=mysqli_query($db, $s);
    $num = mysqli_num_rows($result);

    if($num==1){
        header("location: usedemail.php");
    }
    else{
        $sql_reg= "INSERT INTO InstitutionReg(Institutionname,email,pssword) VALUES('$instname','$email','$password')";

        $check= mysqli_query($db, $sql_reg);
    
        if($check){
            header("location:university.php");
        }
    }
}

if(isset($_POST['signin'])){
    session_start();
     
     $email = $_POST['email'];
     $pass = $_POST['password'];
     $password = MD5($pass);

     $sql ="SELECT * FROM InstitutionReg WHERE email = '$email' && pssword = '$password'";

     $result = mysqli_query($db, $sql);
       
     $num = mysqli_num_rows($result);
     if($num == 1){

         $_SESSION['email']= $email;
         header("location:projectpool.php");
     }
     else{
         echo "take a better look at your credentials";
     }
}


?>