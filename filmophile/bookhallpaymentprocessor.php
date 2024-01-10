<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $cardnumber = $_POST["cardnumber"];
    $cardname = $_POST["cardname"];
    $cardexpiry =  $_POST["cardexpiry"];
    $cardcvv = $_POST["cardcvv"];
    $hallbookingamount = $_POST["hall_amount"];
    $user_id = $_SESSION['userid'];
    $movietheater = $_SESSION['movie_hall_theater'];
    $hall_booking_date =  $_SESSION['hall_booking_date'];
    $tomovietime = $_SESSION['tomovietime'];
    $frommovietime = $_SESSION['frommovietime'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');
    $hall_booked_date = $date ;
    $hall_booked_time = date('H:i');

    $mysql="INSERT INTO hallbooking(user_id, theatre,from_time ,hall_booking_date, to_time,cardnumber, 
    cardname, cardexpiry, cardcvv, hall_booking_amount, hall_booked_date, hall_booked_time) 
    VALUES 
    ('$user_id','$movietheater','$frommovietime','$hall_booking_date', '$tomovietime','$cardnumber',
    '$cardname','$cardexpiry','$cardcvv','$hallbookingamount','$hall_booked_date','$hall_booked_time')";
    $res = mysqli_query($con, $mysql);
        if($res)
        {
            header('location:thankss.php');
        }
  }

?>

