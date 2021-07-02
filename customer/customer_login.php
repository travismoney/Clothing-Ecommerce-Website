<div class="box"> <!--- box start here! --->
  
  <div class="box-header"> <!--- box-header starts here! --->
     
     <center> <!--- center starts here! --->
       
       <h1> Login </h1>
       
       <p class="lead" style="margin-top: 20px;"> Login to Your Account for more crazy deals! </p>
       
       <p class="text-muted"> 
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officia nulla sed in magnam, quibusdam, doloribus voluptas voluptate natus officiis dolore delectus. Architecto repellendus, quibusdam ipsam minima quaerat eius, illo.
           
       </p>
        
     </center> <!--- center ends here! --->
      
  </div> <!--- box-header ends here! --->
  
  <form method="post" action="checkout.php"> <!--- form starts here! --->
    
        <div class="form-group"> <!--- form-group stars here! --->
     
             <label> Email </label>
     
             <input name="c_email" type="text" class="form-control" required>
     
        </div> <!--- form-group ends here! --->
     
        <div class="form-group"> <!--- form-group stars here! --->
     
             <label> Password </label>
     
             <input name="c_pass" type="password" class="form-control" required>
     
        </div> <!--- form-group ends here! --->
        
        <div class="text-center">  <!--- text-center starts here! --->
          
          <button name="login" value="Login" class="btn btn-primary" style="margin-top: 10px;">
             
             <i class="fa fa-sign-in"></i> Login
             
          </button>
            
        </div> <!--- text-center ends here! --->
     
  </form> <!--- form ends here! --->
  
  <center>
     
     <a href="customer_register.php">
        
        <h4 style="margin-top: 20px;">Don't Have An Account...? Register here! </h4>
         
     </a>
 
  </center>
  
</div> <!--- Box Ends here! --->

<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['c_email'];
    
    $customer_pass = $_POST['c_pass'];
    
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    $select_cart = "select * from cart where ip_add='$get_ip'";
    
    $run_cart = mysqli_query($con,$select_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_customer==0){
        
        echo "<script>alert('Your email or password is wrong')</script>";
        
        exit();
        
    }
    
    if($check_customer==1 AND $check_cart==0){
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }else{
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    
}

?>












