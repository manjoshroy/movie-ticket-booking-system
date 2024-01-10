<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
        $meal= $_POST['meal'];
        $_SESSION['meal_price'] = $meal;
      
        header("location:payment.php");   
 }


?>

