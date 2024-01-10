
<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
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

     
    <!-- start payment section -->
     <div class="PaymentMainSection">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                          <img src="images/pay.png" class="img-fluid">
                   </div>
                <div class="col-md-6">
                  <div class="card">
                      <div class="card-body">
                         <form action="paymentcode.php" method="post">
                            <div class="form-group">
                               <label for="cardnumber">Credit / Debit Card Number </label>
                              <input class="form-control" type="text" id="cardnumber" name="cardnumber" required></input>
                            </div>
                            
                        <div class="form-group">
                               <label for="cardname">Name on Card</label>
                              <input class="form-control" type="text" id="cardname" name="cardname" required></input>
                        </div>
                        
                        <div class="form-group">
                               <label for="cardexpiry">Expiry</label>
                              <input class="form-control" type="text" id="cardexpiry" name="cardexpiry" required></input>
                        </div>
                        
                        <div class="form-group">
                               <label for="cardcvv">CVV</label>
                              <input class="form-control" type="text" id="cardcvv" name="cardcvv" required></input>
                        </div>
                        
                        <div class="form-group">
                               <label for="amount">Amount</label>
                              <input class="form-control" type="text" id="amount" name="amount" readonly value=<?php echo $_SESSION['totalticketamount']+ $_SESSION['meal_price']?>></input>
                        </div>
                            
                          <a href="thanks.php"><input type="submit" value="Make Payment" id="submit" name="submit"></a>
                
                          </form>
                      </div>
                  </div>
                </div>
          </div>
       </div>
     </div> 
     <!-- end payment section -->
     
     
     
     
      
       
       
         
            <?php include 'footer.php'; ?>
        
        </div>
    </body>
</html>






