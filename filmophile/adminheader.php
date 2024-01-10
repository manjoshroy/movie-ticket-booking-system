    
            <div class="top-nav">
                
                <p> 
                   <?php
                        session_start(); 
                        if(isset($_SESSION['username']))
                        {
                            echo "<b>Welcome ".$_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
                        }
                        else
                       
                   ?>
               
                    
                         <?php
                            if(isset($_SESSION['username']) == 'Admin')
                            {
                                
                                ?>
                                    <a href="adminlogoutprocessor.php"><i class="fa fa-lock mr-1" aria-hidden="true"></i>Logout</a> 
                                <?php               
                                }
                                else
                                {
                                ?>
                                    <a href="adminlogin.php"><i class="fa fa-lock mr-1" aria-hidden="true"></i>Admin Login</a> 
                                <?php               
                            }
                          ?>
            
            </div>
            
            
           
            
            
            <div class="navbar-div-2">
                <div class="row">
                   
                   
                  <div class="col-md-7">  
                   <a class="navbar-brand" href="index.php"><h1>Filmophile</h1>
                   </a>
                </div>
                    
                 
                  
                      
                 <div class="col-md-5 align-self-center">  
               
                   </div> 
                   
            </div>
           </div> 
            
            
