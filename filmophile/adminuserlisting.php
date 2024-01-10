
     <!DOCTYPE html>
<html>
    <head>
        <title>Admin User Listing</title>
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
            
        <?php include 'adminheader.php'; ?>
            
    
<?php

include 'connection.php';
$sql="select * from users  where status=1";
$res = mysqli_query($con,$sql) ;
if(mysqli_num_rows($res)>0)
{
   ?>  

             
        
        
        <div class="AdminUserListingSection">
            <div class="container">
                
            
            <h1>Users</h1>
            
            <div class="table-responsive">
                <table border="1" class="table table-hover" style="border: 1px solid #dee2e6;margin-top: 20px;"> 
        
            <tr>
                <th>User Name </th>
                <th>Email ID</th>
            </tr>
        
 
            <?php
                
            while($row= mysqli_fetch_assoc($res))
            {
 
            ?>
 
            <tr>
            
            <td><?php echo $row['user_name'];?> </td>
            <td><?php echo $row['emailid'];?> </td>

            </tr>
            <?php   
            }
            ?>
        
        </table>
               </div>
                
            </div>
        </div> 


<?php    
    
}
else
{
    echo "No Record Exist";
}
?>

            
        
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
