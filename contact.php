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
                   Contact
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-12"> <!--- col-md-9 Start --->
            
            <div class="box"> <!--- class box Start --->
               
               <div class="box-header" style="margin: -20px -20px -20px;"> <!--- box-header Start --->
                  
                  <center> <!--- Center Start --->
                     
                     <h2>Feel Free to Contact Us</h2>
                     
                     <p class="text-muted">
                         
                         If you have any questions, feel free to contact us. Our Customer Service Works<strong> 24/7 </strong>anytime.
                         
                     </p>
                       
                  </center> <!--- Center End --->
                  
                  <form action="contact.php" method="post"> <!--- form start --->
                      
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Name</label>
                        
                        <input type="text" class="form-control" name="name" required>
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start ---> 
                        
                        <label>Email</label>
                        
                        <input type="text" class="form-control" name="email" required>
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Subject</label>
                        
                        <input type="text" class="form-control" name="subject" required>
                         
                     </div> <!--- form-group End --->
                     
                     <div class="form-group"> <!--- form-group start --->
                        
                        <label>Message</label>
                        
                        <textarea name="message" rows="6" cols="50" class="form-control"></textarea>
                         
                     </div> <!--- form-group End ---> 
                     
                     <div class="text-center"> <!--- form-group start --->
                       
                       <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 15px;">
                          
                           <i class="fa fa-user-md"></i> Send Message
                           
                       </button>
 
                     </div> <!--- form-group End --->
                      
                  </form> <!--- form End --->
                                               
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           // Any Customer feedback message will be directed to travismoney.tm@gmail.com - testing email 
                           
                           // mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email); -----> format
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "travismoney.tm@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           // Auto replying to customer with this section of php
                           
                           // mail($email,$subject,$msg,$from); -----> format
                           
                           $email = $_POST['email'];
                           
                           $subject = "Coloured Malaysia - Enquiries";
                           
                           $msg = "Dear Customer! Thank you for your message! We will get back to you shortly!";
                           
                           $from = "travismoney.tm@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                           
                       }
                       
                       ?>
                                                
               </div> <!--- box-header End --->
             
            </div> <!--- class box End --->
           
        </div> <!--- col-md-9 End --->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
  
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>