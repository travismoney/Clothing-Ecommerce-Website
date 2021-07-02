<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
     
}else{

include("includes/db.php");
include("functions/functions.php");
    
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
}
    
// selecting customer's order information for table customer_orders
    
$get_details = "select * from customer_orders where order_id='$order_id'";

$run_details = mysqli_query($con,$get_details);

$row_details = mysqli_fetch_array($run_details);
    
    $invoice_no = $row_details['invoice_no']; // invoice number

    $due_amount = $row_details['due_amount']; // amount to be paid
                   
    $qty = $row_details['qty']; // quantity
               
    $size = $row_details['size']; // sizing
               
    $order_date = substr($row_details['order_date'],0,11); // order date
               
    $order_status = $row_details['order_status']; // order status
    
// selecting customer's payment information
    
$get_payment = "select * from payments where invoice_no='$invoice_no'";

$run_payment = mysqli_query($con,$get_payment);

$row_payment = mysqli_fetch_array($run_payment);
    
    $payment_amount = $row_payment['amount']; // payment amount
    
    $payment_mode = $row_payment['payment_mode']; // payment mode
    
    
// selecting product id ordered information for table pending_orders
    
$get_items = "select * from pending_orders where order_id='$order_id'";

$run_items = mysqli_query($con,$get_items);

$row_items = mysqli_fetch_array($run_items);
    
    $product_id = $row_items['product_id']; // product id
    

// getting product information from table product
    
$get_products = "select * from products where product_id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);
    
    $product_title = $row_products['product_title']; // product name / title
    
    $product_Img1 = $row_products['product_Img1']; // product image 
    
    $product_price = $row_products['product_price']; // product price 


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
    
    <!--  Styling for Invoice  -->
    
    <style>
        .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    </style>
    
</head>

<body>
   
<div id="top"> <!--- Top Start --->
      
    <div class="container"> <!--- Container Start --->
          
        <div class="col-md-6 offer"> <!--- col-md-6 offer start --->
              
            <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a>

        </div> <!--- col-md-6 offer finish --->
          
        <div class="col-md-6"> <!--- col-md-6 start --->
          
            <ul class="menu"> <!--- menu starts--->
           
                <li><a href="../customer_register.php">Register</a></li>
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
   
<div id="navbar" class="navbar navbar-default"> <!--- Nav Bar Start --->
      
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
                   Invoice <?php ?>
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-3"> <!--- col-md-3 Start --->
           
           <?php include("includes/sidebar.php");?>
            
        </div> <!--- col-md-3 End --->
        
        <div class="col-md-9"> <!--- col-md-9 start --->
           
           <div class="box"> <!--- box start --->
             
               <div class="invoice-box">
                   
                    <table cellpadding="0" cellspacing="0">
                    
                        <tr class="top">
                           
                            <td colspan="2">
                               
                                <table>
                                    
                                    <tr>
                                       
                                        <td class="title">
                                           
                                            <img src="../admin_area/logo/Screenshot%202019-12-04%20at%2011.12.57%20PM.png" style="width:100%; max-width:300px;">
                                            
                                        </td>
                            
                                        <td>
                                           
                                            Invoice #: <strong><?php echo $invoice_no; ?></strong><br>   <!--- Invoice Payment details --->
                                            
                                            Order Date: <strong><?php echo $order_date; ?></strong><br>   <!--- Invoice Payment details --->
                                            
                                            Payment Status: <strong><?php echo $order_status; ?></strong><br>
                                            
                                        </td>
                                        
                                  </tr>
                                  
                                </table>
                                
                            </td>
                      </tr>
            
                      <tr class="information">
                       
                        <td colspan="2">
                        
                            <table>

                                <tr>
                                    <td>
                                        Coloured Malaysia Sdn. Bhd.<br>
                                        Taipan USJ 9/5N<br>
                                        Subang Jaya 47610<br>
                                        Malaysia
                                    </td>
                            
                                    <td>
                                        Coloured Malaysia<br>
                                        03-8011-8280<br>
                                        colouredmy@gmail.com<br>
                                        colouredmy.com.my
                                    </td>
                               </tr>
                               
                          </table>
                          
                       </td>
                       
                    </tr>
            
                    <tr class="heading">
                       
                        <td>
                           
                            Payment Method
                            
                        </td>
                
                        <td>
                           
                            <?php echo $payment_mode; ?>
                            
                        </td>
                        
                    </tr>
            
                    <tr class="details">
                       
                        <td></td>
                        
                    </tr>
            
                 <div class="table-responsive"> <!--- table-responsive Start --->
                    
                    <table class="table"> <!--- table Start --->
                       
                       <thread> <!--- thread Start --->
                          
                          <tr> <!--- TR Start --->
                             
                             <th colspan="2">Product</th>
                             <th>Quantity</th>
                             <th>Unit Price</th>
                             <th>Size</th>
                             <th>Sub-Total</th>
                                                
                          </tr>  <!--- TR End --->                  
                           
                       </thread> <!--- thread End --->
                       
                        <tbody> <!--- tbody start --->
                                                     
                            <tr> <!--- tr start --->
                               
                               <td> 
                                   <img style="width:70px;" class="img-responsive" src="../admin_area/product_images/<?php echo $product_Img1; ?>"> <!--- Product Picture --->
                               </td>
                               
                               <td align="left">
                                  
                                   <?php echo $product_title; ?> <!--- Product Name --->
                                   
                               </td>
                               
                               <td align="center">
                                   
                                   <?php echo $qty; ?> <!--- Quantity --->
                                    
                               </td>
                               
                               <td align="center">
                                   
                                   MYR <?php echo $product_price; ?> <!--- Unit Price --->
                                    
                               </td>
                               
                               <td>
                                   
                                    <?php echo $size; ?> <!--- Size --->
                                    
                               </td>
                                
                              <td>
                                  
                                 MYR <?php echo $due_amount; ?> <!--- Sub Total --->
                                  
                              </td>
                                                              
                            </tr> <!--- tr end --->
                            
                        </tbody> <!--- tbody end --->
                        
                        <tfoot> <!--- tfoot Start --->
                              
                            <tr> <!--- tr Start --->
                               
                               <th colspan="5">Total Amount</th>
                               
                               <th colspan="1">MYR <?php echo $due_amount; ?></th>
      
                            </tr> <!--- tbody End --->  
                                
                        </tfoot> <!--- tfoot End --->
                        
                    </table> <!--- table End --->
                      
                    <div class="box-footer" style="margin: 30px -20px -20px;">  <!--- box-footer start --->
                    
                    <div class="pull-left">  <!--- pull-left start --->
                       
                       <a href="my_account.php?my_orders" class="btn btn-default">  <!--- btn btn-default start --->
                          
                          <i class="fa fa-chevron-left"></i> View All Orders
                           
                       </a> <!--- btn btn-default End --->     
                        
                    </div>  <!--- pull-left End--->
                    
                    <div class="pull-right">  <!--- pull-left start --->
                                              
                        <a href="invoice_pdf.php?order_id=<?php echo $order_id; ?>" class="btn btn-default">
                           
                           Print PDF <i class="fa fa-print"></i>
                            
                        </a>     
                        
                    </div>  <!--- pull-right End--->
             
                 </div>  <!--- box-footer End --->
                       
                 </div> <!--- table-responsive End --->

                </table>
                    
            </div>
            
           </div> <!--- box end --->
            
        </div> <!--- col-md-9 End --->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
  
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>


<?php } ?>








