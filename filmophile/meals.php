
     <!DOCTYPE html>
<html>
    <head>
        <title>Meals</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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



    ?> 
            
    


             
        
        
        <div class="AdminMovieListingSection">
            <div class="container">

            <form action="mealprocessor.php" method="post">
            
            <h1>Meals</h1>
            
            <div class="table-responsive">
                <table border="1" class="table table-hover" style="border: 1px solid #dee2e6;margin-top: 20px;"> 
        
            <tr>
                <th>MEAL</th>
                <th>Combo</th>
                <th>Price</th>
            </tr>
            <tr>
            <tr>
            
                <td><img src="images/cold_drink.png" alt ="popcorn" width="100px" heigth="100px" text-align="center"></td>
                <td>Cold Drink</td>
                <td>200</td>
            </tr>
              
                <td><img src="images/popcorn.jpg" alt ="popcorn" width="100px" heigth="100px" text-align="center"></td>
                <td>Popcorn </td>
                <td>300</td>
            </tr>
      
            <tr>
                <td><img src="images/PopcornCombo.jpg" alt ="popcorn" width="100px" heigth="100px" text-align="center"></td>
                <td>Popcorn and Cold Drink Combo</td>
                <td>500</td>
            </tr>
   
        </table>
        
            <label class="mr-2">Select Meal<label>
               
                <select name="meal" class="ml-2">
                    <option value="0">Select Meal</option>
                    <option value="200">PopCorn</option>
                    <option value="300">Cold Drink</option>
                    <option value="500">Popcorn and Cold Drink Combo</option>
                </select>
               </div> 
               <input type="submit" value="Continue" id="submit" name="submit">
                </form>
               
            </div>
        </div> 



        
        <?php include 'footer.php'; ?>
        
        
        </div>

    </body>
</html>


