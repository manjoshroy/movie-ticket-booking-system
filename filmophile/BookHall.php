<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in!-->

<html>
    <head>
        <title>Book Hall</title>
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
            
            
            
            
        <?php include 'header.php'; ?>
            
            
            
            
      
            
            
            
            <!-- start contact us section -->
            <div class="BookHallSection">
                <div class="container">
       
                    
                    
                    
                    
                    <div class="row">
                        <div class="col-md-3"></div>
                        
                        <div class="col-md-6 p-4" style=" box-shadow: 0 4px 9px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);background:#f2f2f2;">
                             
                
                            
                            <form role="form" action="bookhallprocessor.php" method="post">
                             <div class="form-group">
                              <label for="movietheater">Theater</label>
                              <select class="form-control" id="movietheater" name="movie_hall_theater" required>
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
                              <input class="form-control" type="date" id="moviedate" name="movie_hall_date" required></input>
                            </div>
                            
                            
                        <div class="form-group">
                            <label for="frommovietime">From Time</label>
                                <select class="form-control" id="frommovietime" name="frommovietime" required>
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
                            <label for="tomovietime">To Time</label>
                                <select class="form-control" id="tomovietime" name="tomovietime" required>
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
                        
                        
                        <div class="TermsConditionsBox">
                            <p>Terms & Conditions</p>
                            <ul>
                                <li>Bookings are done on first come first server basis.</li>
                                <li>Cleaning Charges, Electricity Charges and Generator Fuel Charges are all inclusive in the package.</li>
                                <li>Client will be fully responsible for all liabilities, including food or any damage to the building, carpeting, equipments or other furnishings.</li>
                                <li>The client has to pay for enitre seats in the hall.</li>
                                <li>The charges for booking the entire hall: <strong>Rs.5000</strong></li>
                            </ul>
                        </div>
                        
                       
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="agreeterms" required>
                            <label class="form-check-label" for="agreeterms">I Agree to the <span>Terms & Conditions</span></label>
                          </div>
                            
                         <input class="mt-2" type="submit" value="Pay Now" id="submit" name="submit">
                             </form>
                        </div>
                        
                        
                        <div class="col-md-3"></div>
                    </div>
                  </div>
                </div>
            
            
            <!-- end contact us section -->
            
            
            
            
         

           
           
           
            
         
        <?php include 'footer.php'; ?>


            </div>
    </body>
</html>
