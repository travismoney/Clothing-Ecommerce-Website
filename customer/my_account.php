<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
     
}else{

include("includes/db.php");
include("functions/functions.php");

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Coloured Malaysia</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css"/>
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style1.css">
    
</head>

<body>
   
<div id="top" style="position: sticky; top: 0; z-index: 10;"> <!--- Top Start --->
      
    <div class="container"> <!--- Container Start --->
          
        <div class="col-md-6 offer"> <!--- col-md-6 offer start --->
              
            <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a>

        </div> <!--- col-md-6 offer finish --->
          
        <div class="col-md-6"> <!--- col-md-6 start --->
          
            <ul class="menu"> <!--- menu starts--->
           
                <li><a href="../index.php">Welcome</a></li>
                <li><a href="my_account.php?my_orders">My Account</a></li>
                <li><a href="../cart.php">Go To Cart</a></li>
                <li>
                    <a href="../checkout.php">
                      
                       <?php
                        
                        if(!isset($_SESSION['customer_email'])){
                            
                            echo "<a href='checkout.php'> Login </a>"; 
                            
                        }else{
                            
                            echo "<a href='logout.php'> Log Out </a>"; 
                            
                        }
                        
                        ?>
                        
                    </a>
                </li>
              
            </ul> <!--- menu finish --->
          
        </div> <!--- col-md-6 finish --->
    
    </div> <!--- Container Finish --->
       
   </div> <!--- Top End --->
   
<div id="navbar" class="navbar navbar-default" style="position: sticky; top: 0; z-index: 10;"> <!--- Nav Bar Start --->
      
      <div class="container"> <!--- Container Starts --->
         
         <div class="navbar-header"> <!--- Nav Bar Header Start --->

            <a href="index.php" class="navbar-brand home"> <!--- Nav Bar Brand Start --->
            
                
            </a> <!--- Nav Bar Brand End --->
            
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <!--- button navbar-toggle start #navigation --->
               
                <span class="sr-only">Toggle Navigation</span>
                
                <i class="fa fa-align-justify"></i>
                
            </button> <!--- button navbar-toggle finish #navigation --->
             
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> <!--- button navbar-toggle start #search --->
               
                <span class="sr-only">Toggle Search</span>
                
                <i class="fa fa-search"></i>
                
            </button> <!--- button navbar-toggle finish #search --->
             
         </div> <!--- Nav Bar Header End --->
         
         <div class="navbar-collapse collapse" id="navigation"> <!--- navbar-collapse collapse start --->
             
             <div class="padding-nav"> <!--- padding-nav start --->
                 
                 <ul class="nav navbar-nav left">
                    
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="my_account.php?my_orders">My Account</a></li>
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    
                    <!--- <li><a href="../about.php">About Us</a></li> --->
                     
                 </ul>
                 
             </div> <!--- padding-nav end --->
             
             <a href="../cart.php" class="btn navbar-btn btn-primary right"> <!--- btn navbar-btn btn-primary right start--->
                 
                 <i class="fa fa-shopping-cart"></i>
                 
                 <span class="cart"><?php items(); ?> Items In Your Cart</span>
                 
                 
             </a> <!--- btn navbar-btn btn-primary right end --->
             
             <div class="navbar-collapse collapse right"> <!--- navbar-collapse right start --->
                 
                 <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> 
                    
                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>
                     
                 </button>
                 
             </div> <!--- navbar-collapse right end --->
             
             <div class="collapse clearfix" id="search"> <!--- collapse clearfix start --->
                 
                 <form method="get" action="results.php" class="navbar-form"> <!--- navbar-form start --->
                     
                     <div class="input-group">
                         
                         <input type="text" class="form-control" name="user_query" placeholder="Search Items" required>
                         
                         <span class="input-group-btn">
                         
                         <button type="submit" name="search" value="search" class="btn btn-primary">
                             
                             <i class="fa fa-search"></i>
                             
                         </button>
                         
                         </span>
                         
                     </div>
                     
                 </form> <!--- navbar-form finish --->                 
                 
             </div> <!--- collapse clearfix end --->
             
         </div>  <!--- navbar-collapse collapse end --->
          
      </div> <!--- Container End --->
       
   </div> <!--- Nav Bar End ---> 
   
<div id="content"> <!--- Content Start --->
   
    <div class="container"> <!--- Container Start --->
       
        <div class="col-md-12"> <!--- col-md-12 Start --->
           
           <ul class="breadcrumb"> <!--- breadcrumb Start --->
               <li>
                   <a href="../index.php">Home</a>
               </li>
               <li>
                   My Account
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-3"> <!--- col-md-3 Start --->
           
           <?php include("includes/sidebar.php");?>
            
        </div> <!--- col-md-3 End --->
        
        <div class="col-md-9"> <!--- col-md-9 Start --->
           
           <div class="box"> <!--- box start --->
              
              <?php //PHP commands to retrive order informations 
               
               if (isset($_GET['my_orders'])){
                   include("my_orders.php");
               }
               
               ?>
               
              <?php //PHP commands for payoffline
               
               if (isset($_GET['pay_offline'])){
                   include("pay_offline.php");
               }
               
               ?>
               
              <?php //PHP commands for editing user account
               
               if (isset($_GET['edit_account'])){
                   include("edit_account.php");
               }
               
               ?>
               
              <?php //PHP commands for changing password
               
               if (isset($_GET['change_pass'])){
                   include("change_pass.php");
               }
               
               ?>

              <?php //PHP commands for deleting user account
               
               if (isset($_GET['delete_account'])){
                   include("delete_account.php");
               }
               
               ?>
               
               
           </div><!--- box end --->
            
        </div> <!--- col-md-9 End --->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
   
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>


<?php } ?>