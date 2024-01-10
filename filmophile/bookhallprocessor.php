<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $_SESSION['movie_hall_theater'] = $_POST["movie_hall_theater"];
    $_SESSION['hall_booking_date'] = $_POST["movie_hall_date"];
    $user_id = $_SESSION['user_id'];
    $_SESSION['tomovietime'] = $_POST["tomovietime"];
    $_SESSION['frommovietime'] = $_POST["frommovietime"];
    header('location:bookhallpayment.php');
    }
?>

