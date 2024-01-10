<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $_SESSION['seatnumber'] = $_POST["seatnumber"];
    $seatnumber = $_SESSION['seatnumber'];
       
           if(substr($seatnumber,0,1)=='E' or substr($seatnumber,0,1)=='F' or  substr($seatnumber,0,1)=='G' or substr($seatnumber,0,1)=='H')
           {
            $totalticeketamount = $_SESSION['movieseats']*160; 
           }

           if(substr($seatnumber,0,1)=='I' or substr($seatnumber,0,1)=='J' or  substr($seatnumber,0,1)=='K' or substr($seatnumber,0,1)=='L'  or substr($seatnumber,0,1)=='M'  or substr($seatnumber,0,1)=='N')
           {
            $totalticeketamount = $_SESSION['movieseats']*170; 
           }

           if(substr($seatnumber,0,1)=='O' or substr($seatnumber,0,1)=='P' or  substr($seatnumber,0,1)=='Q' or substr($seatnumber,0,1)=='R'or substr($seatnumber,0,1)=='S')
           {
            $totalticeketamount = $_SESSION['movieseats']*210; 
           }
           $_SESSION['totalticketamount'] =  $totalticeketamount;
           //echo $_SESSION['totalticketamount'];
          header('Location:meals.php');
 }
?>

