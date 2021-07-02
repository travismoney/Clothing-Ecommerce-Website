<div class="box"> <!--- Box starts here! --->
  
  <?php
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
  ?>
   
   <h1 class="text-center"> <!--- text-center starts here --->
      
      <p class="lead text-center"> <!--- lead starts here --->
         
         <a href="order.php?c_id=<?php echo $customer_id ?>"> Online Payment </a>
          
      </p> <!--- lead ends here --->
      
      <center> <!--- center starts here --->
               
          <p class="lead">
          
              <a href="">
                  
                  <strike>PayPal Payment</strike>
                  
                  <img src="images/paypal.jpeg" alt="paypal-image" class="img-responsive">
                  
              </a>
          
          </p>
          
      </center> <!--- center ends here --->

   </h1> <!--- text-center ends here --->
    
</div> <!--- Box Ends here! --->