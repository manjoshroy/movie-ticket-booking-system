
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
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
            $current_date = date('Y-m-d');




    ?> 
             
             <div class="AdminLoginSection"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-6 border p-4">
                        <form class="form-horizontal" method="post" action="check_bookings_code.php">
   
              
    
                 <h2>Check Bookings Details</h2>
               
                  <div class="form-group">
                      <label class="control-label">Select Date and Time</label>
                      <input class="form-control" type="date" id="date_select" name="date_select" max="<?php echo $current_date ?>" required></input>
                   </div>
                                 
                           
                   
                   <div class="form-group">
                      <label class="control-label">Select Date and Time</label>
                      <?php
                     

                        ?>
                      <select class="form-control" name="time_select">
                          <option value="" hidden>Select</option>
                                <option value="10:15">10:15</option>
                                <option value="11:50">11:50</option>
                                <option value="12:30">12:30</option>
                                <option value="2:10">2:10</option>
                                <option value="4:20">4:20</option>
                                <option value="5:40">5:40</option>
                                <option value="6:55">6:55</option>
                                <option value="8:30">8:30</option>
                                <option value="10:00">10:00</option>
                    </select>
                   </div>
            
                <input type="submit" value="Submit" id="submit" name="submit">
                
                
                </form>    
            </div>
                 <div class="col-md-"></div>
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
