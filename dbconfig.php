<?php
   
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pproject";
	//connecting to the database
	
    $db = mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$db){
        echo "db connection error";
    }
?>