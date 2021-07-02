<?php
    
    include("includes/header.php");

?>
   
<div id="content"> <!--- Content Start --->
   
    <div class="container"> <!--- Container Start --->
       
        <div class="col-md-12"> <!--- col-md-12 Start --->
           
           <ul class="breadcrumb"> <!--- breadcrumb Start --->
               <li>
                   <a href="index.php">Home</a>
               </li>
               <li>
                   Checkout
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-12"> <!--- col-md-12 start --->
                
            <?php 
        
            if(!isset($_SESSION['customer_email'])){
            
                include("customer/customer_login.php");
            
            }else{
            
                include("payment_options.php");
            
            }

            ?> 
            
        </div> <!--- col-md-12 End --->
    
    </div> <!--- Container End --->
    
</div> <!--- Content End ---> 
   
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>
