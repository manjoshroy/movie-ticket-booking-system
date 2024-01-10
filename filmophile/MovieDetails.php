 
 <?php 
 session_start();
 include "connection.php";
 if(isset($_GET['movie_id']))
 {
     $_SESSION['movie_id'] = $_GET['movie_id'];
     $sql="select * from movies where movieid=".$_SESSION['movie_id'];
     $res= mysqli_query($con, $sql);
      
 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Movie Details</title>
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

            
        
     <!-- start movie details section -->
        <div class="MovieDetailMainSection">
            <div class="container">
                <?php
                if(mysqli_num_rows($res)>0)
                    {
                    $row= mysqli_fetch_assoc($res);  
                    ?>   
                 <h1><?php echo $row['moviename']?></h1>
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/<?php echo $row['image']?>" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="ContentBox">
                            <h2>Cast</h2>
                            <ul>
                                <li><?php echo $row['cast']?></li>
                                <br>
                            </ul>    
                            <h2>Genre</h2> 
                            <ul>  
                                <li><?php echo $row['genre']?></li>
                                <br>
                            </ul>
                            <h2>Language</h2>
                            <ul>
                                <li><?php echo $row['language']?></li>
                                <br>
                            </ul>

                            <h2>Director</h2>
                            <ul>
                                <li><?php echo $row['director']?></li>
                                <br>
                            </ul>  
                            <button class="btn"><a href="MovieData.php">Book Tickets</a></button>
                            <?php
                            $_SESSION['cast'] = $row['cast'];
                            $_SESSION['genre'] = $row['genre'];
                            $_SESSION['language'] = $row['language'];
                            $_SESSION['director'] = $row['director'];
                            $_SESSION['moviename'] = $row['moviename'];
                            $_SESSION['image'] = $row['image'];
                            $_SESSION['trailer_link'] = $row['trailer_link'];
                    }
     else
     {
     echo("<script>alert('Invalid Movie')</script>");
     }
}
   ?>  
                        </div>
                     </div>
                </div>
            </div>
        </div>
 <!-- end movie details section -->


       
       
    <!-- start video section -->
     <div class="VideoSection">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <iframe height="409" src="<?php echo $row['trailer_link']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
             </div>
         </div>
     </div>
    <!-- end video section -->
      
       
       
         
            <?php include 'footer.php'; ?>
        
        </div>
    </body>
</html>






