<?php

      session_start();

      
include_once 'dbconnect.php';
$error = false;


      //$link=Connection();

   $temp1=100;
   $hum1=200;

   $query = "INSERT INTO templog (temperature, humidity) 
      VALUES ('".$temp1."','".$hum1."')"; 
      
      mysqli_query($con,$query);

   ///mysql_close($link);

      //header("Location: mine.php");
?>
