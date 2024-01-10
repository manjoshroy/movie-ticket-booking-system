 <?php 
 session_start();
 if(!isset($_SESSION['userid']))
 {
   header("location:userlogin.php");
 }
 ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Movie Data</title>
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
            
                    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
            $current_date = date('Y-m-d');
            $current_time = date('H:i');
            echo $current_time;?>


     
     
     
     
     
     
    <!-- start movie data section -->
     <div class="MovieDataMainSection">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                          <img src="images/ticketbooking.jpg" class="img-fluid">
                   </div>
                   <div class="col-md-6">
                           <div class="card">
                      <div class="card-body">
                         <form action="moviedatacode.php" method="post">
                            <div class="form-group">
                              <label for="movietheater">Theater</label>
                              <select class="form-control" id="movietheater" name="movietheater" required>
                                <option value="" hidden>Select</option>
                                <option value="Cinepolis: Celebration Mall, Amritsar">Cinepolis: Celebration Mall, Amritsar</option>
                                <option value="Cinepolis: Mall of Amritsar">Cinepolis: Mall of Amritsar</option>
                                <option value="INOX: VR Ambarsar, Amritsar">INOX: VR Ambarsar, Amritsar</option>
                                <option value="Movietime: Novelty Mall Lawrence Road, Amritsar">Movietime: Novelty Mall Lawrence Road, Amritsar</option>
                                <option value="PVR: SCT, Amritsar">PVR: SCT, Amritsar</option>
                              </select>
                            </div>
                            
                          <div class="form-group">
                              <label for="moviedate">Date</label>
                              <input class="form-control" type="date" id="moviedate" name="moviedate" min="<?php echo $current_date ?>" required></input>
                            </div>
                            
                            
                        <div class="form-group">
                            <label for="movietime">Time</label>
                                <select class="form-control" id="movietime" name="movietime" required>
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
                                
                             <div class="form-group">
                                  <label for="movieseats">How Many Seats</label>
                                  <select class="form-control" id="movieseats" name="movieseats" required>
                                    <option value="" hidden>Select</option>
                                    <option class="1">1</option>
                                    <option class="2">2</option>
                                    <option class="3">3</option>
                                    <option class="4">4</option>
                                    <option class="5">5</option>
                                    <option class="6">6</option>
                                    <option class="7">7</option>
                                    <option class="8">8</option>
                                    <option class="9">9</option>
                                    <option class="10">10</option>
                                  </select>
                                </div>
                              
                   <input type="submit" value="Continue" id="submit" name="submit">
                
                          </form>
                      </div>
                  </div>
                </div>
          </div>
       </div>
     </div> 
     <!-- end movie data section -->
     
     
     
     
      
       
       
         
            <?php include 'footer.php'; ?>
        
        </div>
    </body>
</html>






