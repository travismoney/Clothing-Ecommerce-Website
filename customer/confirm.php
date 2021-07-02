<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
     
}else{

include("includes/db.php");
include("functions/functions.php");
    
// selecting order information based on order_id extracting data from database.
    
if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id']; // query to get order_id
    
    $get_details = "select * from customer_orders where order_id='$order_id'";

    $run_details = mysqli_query($con,$get_details);

    $row_details = mysqli_fetch_array($run_details);

    $invoice_no = $row_details['invoice_no']; // invoice number

    $due_amount = $row_details['due_amount']; // due amount to be paid

}

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
   
<div id="top"> <!--- Top Start --->
      
    <div class="container"> <!--- Container Start --->
          
        <div class="col-md-6 offer"> <!--- col-md-6 offer start --->
              
            <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a>

        </div> <!--- col-md-6 offer finish --->
          
        <div class="col-md-6"> <!--- col-md-6 start --->
          
            <ul class="menu"> <!--- menu starts--->
           
                <li><a href="../customer_register.php">Register</a></li>
                <li><a href="my_account.php">My Account</a></li>
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
                    <li><a href="my_account.php">My Account</a></li>
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
                   <a href="index.php">Home</a>
               </li>
               <li>
                   My Account
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-3"> <!--- col-md-3 Start --->
           
           <?php include("includes/sidebar.php");?>
            
        </div> <!--- col-md-3 End --->
        
        <div class="col-md-9"> <!--- col-md-9 start --->
           
           <div class="box"> <!--- box start --->
              
              <h1 align="center"> Please Confirm Your Payment </h1>
              
              <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"> <!--- form  start --->
                 
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Invoice No: </label>
                    
                    <input type="text" class="form-control" name="invoice_no" value="<?php echo $invoice_no ?>"required>
                                   
                 </div> <!--- form-group end --->      
                 
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Payment Amount: </label>
                    
                    <input type="text" class="form-control" name="amount_sent" value="<?php echo $due_amount ?>" required>
                                   
                 </div> <!--- form-group end --->  
                  
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Payment Method: </label>
                    
                    <select name="payment_mode" class="form-control">  <!--- form-control start --->
                      
                      <option> Select Payment Method </option>
                      <option> Online Bank Transfer</option>
                      <option> Visa</option>
                      <option> MasterCard</option>
                      
                    </select>  <!--- form-control end --->
                   
                 </div> <!--- form-group end --->  
                 
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Transaction / Reference ID: </label>
                    
                    <input type="text" class="form-control" name="ref_no" required>
                                   
                 </div> <!--- form-group end --->  
                 
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Validation Number: </label>
                    
                    <input type="text" class="form-control" name="code" required>
                                   
                 </div> <!--- form-group end ---> 
                 
                 <div class="form-group"> <!--- form-group start --->
                    
                    <label> Payment Date: </label>
                    
                    <input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d') ?>"required>
                                   
                 </div> <!--- form-group end ---> 
                 
                 <div class="text-center">  <!--- text-center start ---> 
                    
                    <button class="btn btn-primary btn-lg" name="confirm_payment"> <!--- form-group end ---> 
                       
                       <i class="fa fa-check"></i>  Confirm Payment
    
                    </button> <!--- form-group end ---> 
     
                 </div> <!--- text-center end ---> 
               
              </form> <!--- form confirm.php end --->
              
                   <?php 
                            
                    // php section for payment
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = $_GET['update_id'];
                        
                        $invoice_no = $_POST['invoice_no'];
                        
                        $amount = $_POST['amount_sent'];
                        
                        $payment_mode = $_POST['payment_mode'];
                        
                        $ref_no = $_POST['ref_no'];
                        
                        $code = $_POST['code'];
                        
                        $payment_date = $_POST['date'];
                        
                        $complete = "Complete";
                        
                        // insert into payments table with data below: 
                        
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values 
                        
                                           ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        // changeing from pending status to complete status after customer purchase is confirmed
                        
                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_pending_order = mysqli_query($con,$update_pending_order);
                        
                        // Once customer successfully purchase item, auto send an email to customer with the important transaction details
                        
                        // Invoice, Payment Date, Amount Paid, Payment mode
                        
                        // Unable to send PDF to customer's email address here.

                        $email = $_SESSION['customer_email'];
                           
                        $subject = "Coloured Malaysia - Your Recent Purchase with us!";
                           
                        $msg = "Thank you for your recent purchase with us Coloured Malaysia!\n\nDetails of Your Purchase\nInvoice No: $invoice_no\nPayment Date: $payment_date\nPayment Amount: MYR $amount\nPayment Method: $payment_mode\n Log into your account to download the official receipt!";
                           
                        $from = "travismoney.tm@gmail.com";
                           
                        mail($email,$subject,$msg,$from);
                        
                        if($run_pending_order){
                            
                            echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";
                            
                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            
                        }
                        
                    }
                   
                   ?>
           
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