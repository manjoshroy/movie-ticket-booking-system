<?php

if(isset($_POST['submit']))
{

    $selected_date = $_POST['date_select'];
    $selected_time = $_POST['time_select'];
    header('Location:check_booking_details.php?selected_date='.$selected_date.'&selected_time='.$selected_time);
    }

?>

