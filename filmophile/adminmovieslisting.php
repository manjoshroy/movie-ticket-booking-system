
     <!DOCTYPE html>
<html>
    <head>
        <title>Admin Movies Listing</title>
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

$sql="select moviename,cast,genre,director from movies ORDER BY movieid DESC";
$res = mysqli_query($con,$sql);


    ?> 
            
    


             
        
        
        <div class="AdminMovieListingSection">
            <div class="container">
                
            
            <h1>Movies</h1>
            
            <div class="table-responsive">
                <table border="1" class="table table-hover" style="border: 1px solid #dee2e6;margin-top: 20px;"> 
        
            <tr>
                <th>Movie</th>
                <th>Cast</th>
                <th>Genre</th>
                <th>Director</th>
            </tr>
            <?php
            while($row= mysqli_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php echo $row['moviename']?></td>
                <td><?php echo $row['cast']?></td>
                <td><?php echo $row['genre']?></td>
                <td><?php echo $row['director']?></td>
            </tr>
            <?php    
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
