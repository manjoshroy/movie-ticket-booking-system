<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{

    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
    $current_time = date('H:i');
   //echo ($_POST["movietime"] <  $current_time);


    if($_POST["movietime"] <  $current_time)
    {
         echo("<script>alert('Kindly select the valid time')</script>");
        
        
    }
    else
    {
         $_SESSION['movietheater'] = $_POST["movietheater"];
        $_SESSION['moviedate'] = $_POST["moviedate"];
        $_SESSION['movietime'] = $_POST["movietime"];
        $_SESSION['movieseats'] = $_POST["movieseats"];
        
        echo "Sorry";
        //echo $_SESSION['moviedate'];
       header('Location:MovieSeatsSelection.php');

      
    }

    
}


?>

