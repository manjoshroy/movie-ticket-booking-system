<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $cardnumber = $_POST["cardnumber"];
    $cardname = $_POST["cardname"];
    $cardexpiry =  $_POST["cardexpiry"];
    $cardcvv = $_POST["cardcvv"];
    $amount = $_POST["amount"] ;
    $user_id = $_SESSION['userid'];
    $seatnumber = $_SESSION['seatnumber'];
    $theatre =  $_SESSION['movietheater'] ;
    $moviedate = $_SESSION['moviedate'] ;
    $movie_id = $_SESSION['movie_id'] ;
    $movietime = $_SESSION['movietime'] ;
    $no_of_seats = $_SESSION['movieseats'] ;
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');
    $booking_date = $date ;
    $booking_time = date('H:i');

    //Check if seats is alreadu reserved then redirect to seatselection page
    $sql="select seatnumber from ticketbooking where movieid=$movie_id and theatre='$theatre' 
            and moviedate='$moviedate' and movietime='$movietime' and seatnumber='$seatnumber'";
    $res = mysqli_query($con,$sql);
        if(!mysqli_num_rows($res)>0)
        {
            $mysql="INSERT INTO ticketbooking(user_id, movieid,moviedate, movietime, ticketamount, seatnumber
        ,cardnumber, cardname, cardexpiry, cardcvv, theatre, no_of_seats,booking_date,booking_time) 
        VALUES 
        ('$user_id','$movie_id','$moviedate','$movietime','$amount','$seatnumber','$cardnumber','$cardname',
        '$cardexpiry','$cardcvv','$theatre','$no_of_seats','$booking_date', '$booking_time')";
        $res = mysqli_query($con, $mysql);
            if($res)
            {
                header('location:thanks.php');
            }
      
        }
        else
        {
            ?>
            <script>alert('Seat Number has already taken')</script>
            <?php 
            header("location:MovieSeatsSelection.php");
        }
}
           
       
?>

