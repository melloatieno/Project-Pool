<?php
require_once "dbconfig.php";

if(isset($_POST['signup'])){
    
    $instname= $_POST['institutionname'];
    $email= $_POST['email'];
    $pswd= $_POST['password'];
    $password = MD5 ($pswd);

    $sql_reg= "INSERT INTO InstitutionReg(Institutionname,email,pssword) VALUES('$instname','$email','$password')";

    $check= mysqli_query($db, $sql_reg);

    if($check){
        header("location:university.php");
    }
    else{
        echo "error noted".$sql_reg;   
    }
}

if(isset($_POST['signin'])){
    header("location:projectpool.php");
}
?>