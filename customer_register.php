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
                   Register Account
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-12"> <!--- col-md-9 Start --->
            
            <div class="box"> <!--- class box Start --->
               
               <div class="box-header"> <!--- box-header Start --->
                  
                  <center> <!--- Center Start --->
                     
                     <h2>Register A New Account</h2>
                       
                  </center> <!--- Center End --->
                  
                  <form name="myForm" action="customer_register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();"> <!-- form start --->
                      
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Full Name</label>  <!--- Customer Name --->
                        
                        <input type="text" id="inputTextBox" class="form-control" name="c_name" onkeypress="return onlyAlphabets(event,this);">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start ---> 
                        
                        <label>Email</label> <!--- Customer Email --->
                        
                        <input type="text" class="form-control" name="c_email">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                                               
                        <label>Password</label> <!--- Customer Password --->
                        
                        <input id="pass" type="password" class="form-control" name="c_pass"><button type="button" onclick="showpw();">Show password</button>
                        
                        <!--- <button class="btn btn-default" style="position: absolute; left: 1063px; top: 259px; border: none;" onclick="showpw();">
                        
                            <i class="fa fa-eye"></i>
                        
                       </button> --->
                         
                     </div> <!--- form-group End --->
                     
                    <div class="form-group"> <!--- form-group start --->
                        
                        <label>Confirm Password</label> <!--- Customer Password --->
                        
                        <input id="cpass" type="password" class="form-control" name="c_confirm_pass"><button type="button" onclick="showcpw();">Show password</button>
                        
                        <!--- <button class="btn btn-default" style="position: absolute; left: 1063px; top: 333px; border: none;">
                        
                            <i class="fa fa-eye"></i>
                        
                       </button> --->
                       
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Country</label> <!--- Customer Password --->
                        
                        <input type="text" class="form-control" name="c_country">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>City</label> <!--- Customer Password --->
                        
                        <input type="text" class="form-control" name="c_city">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Contact Number</label> <!--- Customer Password --->
                        
                        <input type="text" class="form-control" name="c_contact" onkeypress="return isNumber(event);">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Address</label> <!--- Customer Password --->
                        
                        <input type="text" class="form-control" name="c_address">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Profile Picture</label> <!--- Customer Password --->
                        
                        <input type="file" class="form-control form-height-custom" name="c_image">
                         
                     </div> <!--- form-group End --->
                     
                     <div class="text-center"> <!--- form-group start --->
                       
                       <button type="submit" name="register" class="btn btn-primary"> <!--- Button Start --->
                          
                           <i class="fa fa-user-md"></i> Register
                           
                       </button> <!--- Button End --->
 
                     </div> <!--- form-group End --->
                      
                  </form> <!--- form End --->
                                                
               </div> <!--- box-header End --->
             
            </div> <!--- class box End --->
           
        </div> <!--- col-md-9 End --->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End ---> 
   
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script type="text/javascript" src="includes/myform.js"></script>
        
</body>
</html>


<?php

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register without items in cart will redirect towards the checkout page
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register with items in cart will redirect towards the index.php/homepage
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>