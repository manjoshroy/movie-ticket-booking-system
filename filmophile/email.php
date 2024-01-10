<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in!-->

<html>
    <head>
        <title>Contact us</title>
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
            <div class="contactus-page-section">
                <div class="container">
       
                    
                    
                    
                    
                    <div class="row">
                        <div class="col-md-3"></div>
                        
                        <div class="col-md-6 p-4" style=" box-shadow: 0 4px 9px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);background:#f2f2f2;">
                             
                            <h3 class="mb-3 mt-0">Get in Touch</h3>
                            
                    <form role="form" action="emailcode.php"  enctype="multipart/form-data"  method="POST">
                     <input type="text" class="form-control form-control-sm" id="name" name="name" required placeholder="Name">

                     <input type="text" class="form-control form-control-sm" id="whatsappnumber" name="whatsappnumber" required placeholder="Whatsapp Number">
                     
                 
                     <input type="email" class="form-control form-control-sm" id="email" name="email" required placeholder="Email">

             
                     <input type="text" class="form-control form-control-sm" id="city" name="city" required placeholder="City">  
                     
                      <input type="text" class="form-control form-control-sm" id="country" name="country" required placeholder="Country">  
                     
                     
                       <label for="profileimage">Select your portfolio </label><br>
                       
                       <input type="file"  id="profileimage" name="profileimage" required>  
                       
                         
                          <br>
                 
                     <input type="submit" value="Submit" id="submit" name="submit">
                </form>

                        </div>
                        
                        
                        <div class="col-md-3"></div>
                    </div>
                  </div>
                </div>
            
            
            <!-- end contact us section -->
            
            
            
            
         


           
  <!-- start last section-->
   <div class="last-section mt-0">
       <div class="container">
           
           <div class="row">
                <div class="col-md-4">
                     <div class="row no-gutters">
                       <div class="col-auto align-self-center">
                         <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div class="col align-self-center">
                                <div class="card-block px-2">
                                     <p>24/7 Customer Care</p>
                                </div>
                        </div>
                    </div>
               </div>
               
               <div class="col-md-5">
                   <div class="row no-gutters">
                       <div class="col-auto align-self-center">
                         <i class="fa fa-ticket" aria-hidden="true"></i>
                            </div>
                            <div class="col align-self-center">
                                <div class="card-block px-2">
                                     <p>Resend Booking Confirmation</p>
                                </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                  <div class="row no-gutters">
                       <div class="col-auto align-self-center">
                         <i class="fa fa-key" aria-hidden="true"></i>
                            </div>
                            <div class="col align-self-center">
                                <div class="card-block px-2">
                                      <p>Secure Payments</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>    
       </div>
   </div>
  <!-- end last section-->

           
           
           
           
           
           
           
            
         
        <?php include 'footer.php'; ?>


            </div>
    </body>
</html>
