 
<!DOCTYPE html>
<html>
    <head>
        <title>Movie Seats Selection</title>
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
          $bookedseatnumbers=" ";
          $movietheater = $_SESSION['movietheater'];
           $movieid = $_SESSION['movie_id'];
          $movietime = $_SESSION['movietime'];
          $moviedate = $_SESSION['moviedate'];
          $sql="select seatnumber from ticketbooking where movieid=$movieid and theatre='$movietheater' 
                  and moviedate='$moviedate' and movietime='$movietime'";
          $res = mysqli_query($con,$sql);
           if(mysqli_num_rows($res)>0)
            {
            while($row= mysqli_fetch_assoc($res))
              {
                  $seatnumber = $row['seatnumber'];  
                  $bookedseatnumbers = $bookedseatnumbers.$seatnumber." ";
              }       
            }   
     ?>
     
     
     
    <!-- start movie seats section -->
     <div class="MovieSeatsMainSection">
        <div class="container">
            <h1><?php echo $_SESSION['moviename'] ?></h1>
            <p><?php echo $movietheater ?></p>
            <p><?php echo $moviedate ?></p>
            <p><?php echo $movietime ?></p>
            

<h2 class="mt-4">Premium Rate - Rs.210 (S1 - O10)</h2>
<h2>Executive Rate - Rs.170 (N1 - I10)</h2>
<h2>Normal Rate - Rs.160 (H1 - E10)</h2>

<table class="table table-bordered">
<?php
for($startalphabetcode=83; $startalphabetcode>=69; $startalphabetcode--)
{
  ?>
  <tr>
    <?php
          for($no=1; $no<=10; $no++)
          {
            $seatnumber=chr($startalphabetcode).$no;//concatination of S( char searching alphav=bet from 83 loop above s comes from $sstartalphabetcode loop) and comes from $no
            $findstring=strpos($bookedseatnumbers,$seatnumber);//strpos finding string like S1,S2,S3 from ($bookedseatnumbers) to search (only s1) from $seatnumber 
            if($findstring>0)
            {
    ?>
      <td style="background:lightgray"><?php  echo chr($startalphabetcode) . $no;?></td>
    <?php
    }
else
{
 
 ?>
  <td><?php  echo chr($startalphabetcode) . $no;?></td>

  <?php
}     

}
 ?>
    </tr> 
    
<?php
}
 
?>
</table>
                     
        <div class="row">
            <div class="col-md-4">
               <form action="movieseatscode.php" method="post">
                <div class="form-group">
                <label for="seatnumber">Enter Seats Number</label>
                 <input class="form-control" type="text" id="seatnumber" name="seatnumber" required></input>
             </div>    
               <a href="payment.php" id="submit"><input type="submit" value="Pay Now" id="submit" name="submit"></a>
            </form>
            </div>
        </div>    
        
        
        
        
  </div>
     </div> 
     <!-- end movie seats section -->
  
     
     
            <?php include 'footer.php'; ?>
            
            
            
            
        
        </div>
    </body>
</html>






