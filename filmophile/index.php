<?php
include 'connection.php';
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>Filmophile</title>
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

            



            
            
        
        
 <!-- start main slider -->
    <div id="MainCarousel" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="images/slide1.jpg" alt="slide 1" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="images/slide2.jpg" alt="slide 2" style="width:100%;">
    </div>
    <div class="carousel-item">
       <img class="img-fluid" src="images/slide3.jpg" alt="slide 3" style="width:100%;">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#MainCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#MainCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <!-- end main slider -->     
      
      
      
      
    



            
 <!-- start running movies slider --> 
      
<div class="MoviesCarouselSection">
    <h2>Running Movies</h2>
    <div class="container-fluid">
        <div id="RunningMovieCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                     <a href="MovieDetails.php?movie_id=1">
                        <img class="img-fluid" src="images/1.jpg" alt="movie 1"/>
                        </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <a href="MovieDetails.php?movie_id=2">
                    <img class="img-fluid" src="images/2.jpg" alt="movie 2"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <a href="MovieDetails.php?movie_id=3">
                        <img class="img-fluid" src="images/3.jpg" alt="movie 3"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <a href="MovieDetails.php?movie_id=4">
                        <img class="img-fluid" src="images/4.jpg" alt="movie 4"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <a href="MovieDetails.php?movie_id=5">
                        <img class="img-fluid" src="images/5.jpg" alt="movie 5"/>
                         </a>
                </div>
                 
            </div>
           
           
            <a class="carousel-control-prev" href="#RunningMovieCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#RunningMovieCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
        </div>
    </div>
</div>
 <!-- end running movies slider --> 

      
            

     
     
     
     
  
     <img src="images/bannerfull.jpg" class="img-fluid w-100">
 
     

    



            
 <!-- start upcoming movies slider --> 
      
<div class="MoviesCarouselSection">
     <h2>Upcoming Movies</h2>
    <div class="container-fluid">
        <div id="UpcomingMovieCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                     <a href="#">
                        <img class="img-fluid" src="images/bhool-bhulaiyaa2.jpg" alt="movie 1"/>
                        </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <a href="#">
                    <img class="img-fluid" src="images/brahmastra.jpg" alt="movie 2"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <a href="#">
                        <img class="img-fluid" src="images/jurassic-world.jpg" alt="movie 3"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                      <a href="#">
                        <img class="img-fluid" src="images/thor.jpg" alt="movie 4"/>
                         </a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                     <a href="#">
                        <img class="img-fluid" src="images/spiderman.jpg" alt="movie 5"/>
                         </a>
                </div>
               
                
            </div>
           
           
            <a class="carousel-control-prev" href="#UpcomingMovieCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#UpcomingMovieCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
        </div>
    </div>
</div>
 <!-- end upcoming movies slider --> 
 
 


    
    
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <img src="images/banner1.jpg" class="img-fluid">
          </div>
          <div class="col-md-6">
              <img src="images/banner2.jpg" class="img-fluid">
          </div>
      </div>
    </div>
    
    
    
    
    


           
  <!-- start last section-->
   <div class="last-section">
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






