<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
    
    $admin_session = $_SESSION['admin_email']; 
    
    $get_admin = "select * from admins where admin_email='$admin_session'";
    
    $run_admin = mysqli_query($con,$get_admin);
    
    $row_admin = mysqli_fetch_array($run_admin);
    
    $admin_id = $row_admin['admin_id'];
    
    $admin_name = $row_admin['admin_name'];
    
    $admin_email = $row_admin['admin_email'];
    
    $admin_image = $row_admin['admin_image'];
    
    $admin_country = $row_admin['admin_country'];
    
    $admin_about = $row_admin['admin_about'];
    
    $admin_contact = $row_admin['admin_contact'];
    
    $admin_job = $row_admin['admin_job'];
    
    $get_products = "select * from products";
    
    $run_products = mysqli_query($con,$get_products);
    
    $count_products = mysqli_num_rows($run_products);
    
    $get_customers = "select * from customers";
    
    $run_customers = mysqli_query($con,$get_customers);
    
    $count_customers = mysqli_num_rows($run_customers);
    
    $get_p_categories = "select * from product_category";
    
    $run_p_categories = mysqli_query($con,$get_p_categories);
    
    $count_p_categories = mysqli_num_rows($run_p_categories);
    
    $get_pending_orders = "select * from pending_orders";
    
    $run_pending_orders = mysqli_query($con,$get_pending_orders);
    
    $count_pending_orders = mysqli_num_rows($run_pending_orders);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coloured Malaysia Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  
  <div id="wrapper"> <!--- wrapper starts --->
    
    <?php include("includes/sidebar.php"); ?>
     
      <div id="page-wrapper"> <!--- page-wrapper starts --->
         
          <div class="container-fluid"> <!--- container-fluid starts --->
           
           <?php
                
                // CLICK ON DASHBOARD
            
                if(isset($_GET['dashboard'])){
                
                    include("dashboard.php");
            
                }
                    
                // INSERT NEW PRODUCT PHP
    
                if(isset($_GET['insert_product'])){
                    
                    include("insert_product.php");
                    
                }
    
                // VIEW ALL AVAILABLE PRODUCTS
    
                if(isset($_GET['view_products'])){
                    
                    include("view_products.php");
                    
                }
                
                // DELETE PRODUCTS
    
                if(isset($_GET['delete_product'])){
                    
                    include("delete_product.php");
                    
                }
    
                // EDIT PRODUCTS
    
                if(isset($_GET['edit_product'])){
                    
                    include("edit_product.php");
                    
                }
    
                // INSERT PRODUCT CATEGORY
    
                if(isset($_GET['insert_p_cat'])){
                    
                    include("insert_p_cat.php");
                    
                }
    
                // VIEW PRODUCT CATEGORY
    
                if(isset($_GET['view_p_cats'])){
                    
                    include("view_p_cats.php");
                    
                }
    
                // DELETE PRODUCT CATEGORY
    
                if(isset($_GET['delete_p_cat'])){
                    
                    include("delete_p_cat.php");
                    
                }
    
                // EDIT PRODUCT CATEGORY 
    
                if(isset($_GET['edit_p_cat'])){
                    
                    include("edit_p_cat.php");
                    
                }
                
                // INSERT CATEGORY 
    
                if(isset($_GET['insert_cat'])){
                    
                    include("insert_cat.php");
                    
                }
    
                // VIEW CATEGORY 
    
                if(isset($_GET['view_cats'])){
                    
                    include("view_cats.php");
                    
                }
    
                // EDIT CATEGORY
    
                if(isset($_GET['edit_cat'])){
                    
                    include("edit_cat.php");
                    
                }
    
                // DELETE CATEGORY
    
                if(isset($_GET['delete_cat'])){
                    
                    include("delete_cat.php");
                    
                }
    
                // INSERT SLIDE
    
                if(isset($_GET['insert_slide'])){
                    
                    include("insert_slide.php");
                    
                }
                
                // VIEW SLIDES
                
                if(isset($_GET['view_slides'])){
                    
                    include("view_slides.php");
                    
                }
    
                // DELETE SLIDE
                
                if(isset($_GET['delete_slide'])){
                    
                    include("delete_slide.php");
                    
                }
                
                // EDIT SLIDE
                
                if(isset($_GET['edit_slide'])){
                    
                    include("edit_slide.php");
                    
                }
                
                // VIEW CUSTOMERS
    
                if(isset($_GET['view_customers'])){
                    
                    include("view_customers.php");
                    
                }
    
                // DELETE CUSTOMER
    
                if(isset($_GET['delete_customer'])){
                    
                    include("delete_customer.php");
                    
                }
                
                // VIEW ORDERS
    
                if(isset($_GET['view_orders'])){
                    
                    include("view_orders.php");
                    
                }
    
                // VIEW ORDERS
    
                if(isset($_GET['delete_order'])){
                    
                    include("delete_order.php");
                    
                }
    
                // VIEW PAYMENTS
    
                if(isset($_GET['view_payments'])){
                    
                    include("view_payments.php");
                    
                }
    
                // DELETE PAYMENT
    
                if(isset($_GET['delete_payment'])){
                    
                    include("delete_payment.php");
                    
                }
                
                // VIEW USERS - NOT DONE
                
                if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   
    
                // DELETE USER - NOT DONE
    
                if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }
                
                // INSERT USER - NOT DONE
    
                if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }
    
                // USER PROFILE - NOT DONE
    
                if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }
    
    
           ?>
              
          </div> <!--- container-fluid ends --->
          
      </div> <!--- page-wrapper ends --->
      
  </div> <!--- wrapper ends --->
   
   
<script src="js/jquery-331.min.js"></script> 
<script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>


<?php } ?>

