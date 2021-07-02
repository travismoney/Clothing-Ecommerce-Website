<div id="footer"> <!--- Footer Start --->
   
    <div class="container"> <!--- Container Start --->
       
        <div class="row"> <!--- Row Start --->
           
            <div class="col-sm-6 col-md-3"> <!--- col-sm-6 col-md-3 Start --->
              
              <h4>Pages</h4>
               
               <ul> <!--- UL Start --->
                   <li><a href="cart.php">Shopping Cart</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                   <li><a href="shop.php">Shop</a></li>
                   <li><a href="customer/my_account.php?my_orders">My Account</a></li>  <!--- \\\\\\\\ my_account.php included --->
               </ul><!--- UL End --->
               
               <br>
               
               <h4>User Section</h4>
               
               <ul><!--- UL Start --->
                          
                    <?php
                        
                        if(!isset($_SESSION['customer_email'])){
                                
                            echo "<a href='checkout.php'>Log In</a>";
                                
                        }else{
                                
                            echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                                
                        }
                        
                    ?>
                    
                    <li>
                   
                    <?php
                        
                        if(!isset($_SESSION['customer_email'])){
                                
                            echo "<a href='customer_register.php'> Register </a>";
                                
                        }else{
                                
                            echo "<a href='customer/my_account.php?edit_account'>Edit Account</a>";
                                
                        }
                        
                    ?>
                       
                   </li>
                   
               </ul><!--- UL End --->
                
                <hr class="hidden-md hidden-lg">
                
            </div> <!--- col-sm-6 col-md-3 End --->
            
            <div class="col-sm-6 col-md-3">  <!--- col-sm-6 col-md-3 Start --->
               
               <h4>Product Categories</h4>
               
               <ul> <!--- UL Start --->
               
                <?php getProductCategory(); ?>  <!--- GETTING TOP PRODUCT CATEGORY! --->

               </ul> <!--- UL End --->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div>  <!--- col-sm-6 col-md-3 End --->
            
            <div class="col-sm-6 col-md-3">  <!--- col-sm-6 col-md-3 Start --->
            
                <h4>Find Us:</h4>
                
                <p>  <!--- P Start --->
                    
                    <strong>Coloured Malaysia Sdn. Bhd.</strong>
                    <br/>Taipan USJ 9/5N
                    <br/>Subang Jaya
                    <br/>Malaysia
                    <br/>03-8011-8282
                    <br/>colouredmy@gmail.com
                    
                </p> <!--- P End --->
                
                <a href="contact.php">Have Questions? Contact Us!</a>
                
                <hr class="hidden-md hidden-lg">
            
            </div>  <!--- col-sm-6 col-md-3 End --->
            
            <div class="col-sm-6 col-md-3">
            
                <h4>Subscribe To Our Newsletter</h4>
                
                <p class="text-muted">
                   Don't miss out our promotions! Subscribe now!
                </p>
                
                <form action="" method="post"> <!--- Form Start --->
                  
                   <div class="input-group"> <!--- Form Input Group Start --->
                      
                      <input type="text" class="form-control" name="email">
                       
                       <span class="input-group-btn"> <!--- input-group-btn Start --->
                          
                          <input type="submit" value="Subscribe" class="btn btn-default">
                           
                       </span> <!--- input-group-btn End --->
                       
                   </div> <!--- Form Input Group End --->
                    
                </form> <!--- Form End --->
                
                <br>
                
                <h4>Follow Us</h4>
                
                <p class="social"> 
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </p>
            
            </div> 
        
        </div><!--- Row End ---> 
    
    </div> <!--- Container End --->

</div> <!--- Footer End --->

<div class="copyright"> <!--- Copyright Start --->
   
    <div class="container"> <!--- Container Start --->
           
        <p>&copy; 2019 Coloured Malaysia
           
           <br/>All Rights Reserved
           
        </p>
    
</div> <!--- Copyright End --->