    
            <div class="top-nav">
                
                <p> 
                   <?php
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    ?>
                    <?php
                        if(isset($_SESSION['username']))
                        {
                            echo "<b>Welcome ".$_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
                        }
                        else
                       
                   ?>
               
                    <a href="adminlogin.php"><i class="fa fa-lock mr-1" aria-hidden="true"></i> Admin Login</a>
                    <a href="userlogin.php">
                        
                          <?php
                            if(isset($_SESSION['username']))
                            {
                                
                                ?>
                                    <a href="userlogout.php"><i class="fa fa-lock mr-1" aria-hidden="true"></i>Logout</a> 
                                <?php               
                                }
                                else
                                {
                                ?>
                                    <a href="userlogin.php"><i class="fa fa-lock mr-1" aria-hidden="true"></i>User Login</a> 
                                <?php               
                            }
                          ?>
                        <a href="userhome.php"> </i>My Bookings</a>
                    <a href="BookHall.php"> <i class="fa fa-building mr-1" aria-hidden="true"></i> Book Entire Hall</a></p>
            </div>
            
            
           
            
            
            <div class="navbar-div-2">
                <div class="row">
                   
                   
                  <div class="col-md-7">  
                   <a class="navbar-brand" href="index.php">
                       <img class="img-fluid" src="images/logo.png">
                   </a>
                </div>
                    
                 
                  
                      
                 <div class="col-md-5 align-self-center">  
               
                   </div> 
                   
            </div>
           </div> 
            
            
