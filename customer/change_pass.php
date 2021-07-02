<h1 align="center"> Change Your Password </h1>

<form action="" method="post">  <!--- form starts --->
  
  <div class="form-group"> <!--- form-group starts --->
     
     <label> Your Old Password:  </label>
     
     <input type="password" name="old_pass" class="form-control" required>
      
  </div> <!--- form-group ends --->
   
  <div class="form-group"> <!--- form-group starts --->
     
     <label> Your New Password: </label>
     
     <input type="password" name="new_pass" class="form-control" required>
      
  </div> <!--- form-group ends --->
   
  <div class="form-group"> <!--- form-group starts --->
     
     <label> Confirm New Password: </label>
     
     <input type="password" name="new_pass_again" class="form-control" required>
      
  </div> <!--- form-group ends --->
   
   <div class="text-center"> <!--- text-center starts --->
      
      <button type="submit" name="submit" class="btn btn-primary"> <!--- btn btn-primary start --->
         
        <i class="fa fa-user-md"></i> Update Now
      
      </button> <!--- btn btn-primary end --->
              
   </div> <!--- text-center ends --->
     
</form> <!--- form ends --->


<?php

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($con,$sel_c_old_pass);
    
    $check_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_old_pass==0){
        
        echo "<script>alert('Sorry, your current password is not valid. Please try again!')</script>";
        
        exit();    
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Sorry, your new password did not match')</script>";
        
        exit();   
        
    }
    
    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Your Password has been successfully updated!')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }

    
}

?>












