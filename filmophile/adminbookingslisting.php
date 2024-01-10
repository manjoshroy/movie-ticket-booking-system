
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Bookings Listing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet"> 
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="newstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="container-fluid p-0">
        <?php include 'adminheader.php'; 

include 'connection.php';

$sql="select theatre,movieid,booking_date,booking_time,ticketamount,user_id from ticketbooking 
        ORDER BY ticketid DESC";
$res = mysqli_query($con,$sql);


    ?> 
             
        
        
        <div class="AdminBookingsListingSection">
            <div class="container">
                
            
            <h1>Bookings</h1>
            
            <div class="table-responsive">
                <table border="1" class="table table-hover" style="border: 1px solid #dee2e6;margin-top: 20px;"> 
        
            <tr>
                <th>Username</th>
                <th>Theater</th>
                <th>Movie</th>
                <th>Date</th>
                <th>Time</th>
                <th>Amount</th>
            </tr>
            <?php
            while($row= mysqli_fetch_assoc($res))
            {
            $old_booking_date = $row['booking_date'];
            $middle = strtotime($old_booking_date);
            $new_date = date('d-m-Y', $middle);

            $old_booking_time = $row['booking_time'];
            $middlee = strtotime($old_booking_time);
            $new_time = date('H:i', $middlee);
            
            $sql1="select user_name from users where user_id =".$row['user_id'];
            $res1 = mysqli_query($con,$sql1);
            if($row1= mysqli_fetch_assoc($res1))
            {
                $username = $row1['user_name'];
                  $sql2="select moviename from movies where movieid =".$row['movieid'] ;
                $res2 = mysqli_query($con,$sql2);
                if($row2 = mysqli_fetch_assoc($res2))
                {
                    $moviename = $row2['moviename'];
            
            ?>
     
            <tr>
                <td><?php echo "$username"?></td>
                <td><?php echo $row['theatre']?></td>
                <td><?php echo $moviename?></td>
                <td><?php echo $new_date?></td>
                <td><?php echo $new_time?></td>
                <td><?php echo  $row['ticketamount']?></td>
            </tr>
            <?php 
                }
                 }   
             }
               ?>
        
        </table>
               </div>
                
            </div>
        </div> 
        
        <?php include 'footer.php'; ?>
        
        
        </div>

    </body>
</html>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
