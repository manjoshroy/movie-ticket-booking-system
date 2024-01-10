<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
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

<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">


    </head>
    


    
    <body>
        
        <div class="container-fluid p-0 mb-0">
            
            
          
        <?php include 'adminheader.php'; ?>
                   
            

                    

        <div class="AdminHomeSection">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                       <a href="adminuserlisting.php">      
                        <div class="card">
                            <div class="card-img">
                              <i class="fa fa-user" aria-hidden="true"></i>
                         </div>
                        <div class="card-desc">
                            <h3>Users</h3>
                        </div>  
                        </div>
                     </a>
                  </div>
                  
                  <div class="col-md-3">
                       <a href="adminmovieslisting.php">      
                        <div class="card">
                            <div class="card-img">
                              <i class="fa fa-film" aria-hidden="true"></i>
                         </div>
                        <div class="card-desc">
                            <h3>Movies</h3>
                        </div>  
                        </div>
                     </a>
                  </div>
                  
                   <div class="col-md-3">
                       <a href="adminbookingslisting.php">      
                        <div class="card">
                            <div class="card-img">
                              <i class="fa fa-ticket" aria-hidden="true"></i>
                         </div>
                        <div class="card-desc">
                            <h3>Bookings</h3>
                        </div>
                        </div>
                     </a>
                  </div>
                  
                  <div class="col-md-3">
                       <a href="check_bookings.php">      
                        <div class="card">
                            <div class="card-img">
                              <i class="fa fa-ticket" aria-hidden="true"></i>
                         </div>
                        <div class="card-desc">
                            <h3>Bookings Datewise</h3>
                        </div>  
                        </div>
                     </a>
                    </div>
                  </div>
            </div>
       
         

         </div>
      
        <?php include 'footer.php'; ?>



        </div>

    </body>
</html>


    
   
     
