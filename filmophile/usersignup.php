<?php
if(isset($_SESSION['username']))
{
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Signup</title>
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
<link href="style.css" rel="stylesheet" type="text/css"/>



    </head>
    
    <body>
        
        <div class="container-fluid p-0">
            
            
            
        <?php include 'header.php'; ?>
                   
            
         
         <div class="UserSignupSection"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-6 border p-4">  
                    <form class="form-horizontal" method="post" action="userprocessor.php">
                         
                         <h2>User Sign Up</h2>
                         
                         
                        <div class="form-group">
                          <label class="control-label">Email ID</label>
                          <input type="text" class="form-control" name="email"  required id="email">
                        </div>
                      
                        <div class="form-group">
                          <label class="control-label">Username</label>
                          <input type="text" class="form-control" name="username"  required id="username">
                        </div>
                             
                      <div class="form-group">
                        <label class="control-label">Password</label>
                          <input type="password" class="form-control" name="password"  required id="password">
                        </div>
                      
                         
                     
                      <input type="submit" value="Register" id="submit" name="submit">
                      
                          </form>
                      </div>
                      
                      
                    <div class="col-md-6"></div>  
                      
                      
                      </div>       
                    </div>        
                    </div>  
                         
            

        <?php include 'footer.php'; ?>


        </div>

    </body>
</html>






