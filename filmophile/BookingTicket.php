 
<!DOCTYPE html>
<html>
    <head>
        <title>Booking Ticket Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="newstyle.css" rel="stylesheet" type="text/css"/>
 
   
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet"> 







    </head>
   <body>
        
        <div class="container-fluid p-0">
            
            <?php include 'header.php'; 

include 'connection.php';

$sql="select * from ticketbooking where user_id =".$_SESSION['userid']." ". "ORDER BY ticketid DESC" ;
$res = mysqli_query($con,$sql);
if($row= mysqli_fetch_assoc($res))
{
    $old_booking_date = $row['booking_date'];
    $middle = strtotime($old_booking_date);
    $new_date = date('d-m-Y', $middle);

    $old_booking_time = $row['booking_time'];
    $middlee = strtotime($old_booking_time);
    $new_time = date('H:i', $middlee);
    $sql2="select moviename from movies where movieid =".$row['movieid'] ;
                $res2 = mysqli_query($con,$sql2);
                if($row2 = mysqli_fetch_assoc($res2))
                {
                    $moviename = $row2['moviename'];

    ?> 
     
     
     
     
    <!-- start ticket details section -->
     <div class="TicketDetailSection">
          <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                
                
                <div class="col-md-6">
                 <div class="card">
                     <div class="card-body">
                        <h2>Filmophile</h2>
                        <h3>Your booking is confirmed!</h3>
                        <p class="bookingid">Booking ID: <span>BRXP<?php echo $row['ticketid']?></span></p>
                        
                        
                         <h4>Order Summary</h4>
                         
                        <div class="orderSummary border">


                     <div class="row contentRow">
                         <div class="col-md-6">
                                 <h5>Movie</h5>
                                   <p>Theatre</p>
                                   <p>Seat Number</p>
                        </div>
                        <div class="col-md-6">
                            <h5> <?php echo "$moviename"?></h5>
                             <p><?php echo $row['theatre'];?></p>
                             <p><?php echo $row['seatnumber'];?></p>
                         </div>
                     </div>



                      

                     <div class="row contentRow">
                         <div class="col-md-6">
                                   <h5>Ticket Amount</h5>
                                   <p>Quantity</p>
                               </div>
                               <div class="col-md-6">
                                   <h5>Rs. <?php echo $row['ticketamount'];?></h5>
                                   <p><?php echo $row['no_of_seats'];?> Tickets</p>
                               </div>
                           </div>
                           
                           
                           
                           
                           
                           
                               <div class="row contentRow" style="background:#f5f5f5;border-bottom:none;">
                                    <div class="col-md-6">
                                        <h5 class="m-0">Amount Paid</h5>
                               </div>
                               <div class="col-md-6">
                                   <h5 class="m-0">Rs. <?php echo $row['ticketamount'];?></h5>
                               </div>
                           </div>
                        </div>
                        
                        
                        
                        <div class="row confirmationRow" style="text-align:center">
                            <div class="col-md-12">
                                <h6>Booking Date & Time</h6>
                                <p><span class="date"><?php echo $new_date;?></span> | <span class="time"><?php echo $new_time;?></span></p>   
                             </div> 
                        </div>
                        
                        
                        
                     </div>
                   </div>
                 </div> 
                  
                  
                  <div class="col-md-3"></div>
               </div>
            </div>
     </div> 
    <!-- end ticket details section -->
     
     
<?php    
    
                }
}
else
{
    echo "No Record Exist";
}
?>
      
       
       
         
            <?php include 'footer.php'; ?>
        
        </div>
    </body>
</html>






