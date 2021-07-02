<center> <!--- center starts --->
   
    <h1> My Order History </h1>
    
    <p class="lead">Your Orders on one place</p>
    
    <p class="text-muted">if you have any enquiries feel free to contact us</p>

</center> <!--- center ends --->

<br>


<div class="table-responsive"> <!--- table-responsive starts --->
    
    <table class="table table-bordered table-hover">  <!--- table table-bordered table-hover starts --->
       
       <thread> <!--- thread starts --->
          
          <tr> <!--- tr starts --->
             
             <th>No: </th>
             <th>Due Amount: </th>
             <th>Invoice No: </th>
             <th>Quantity: </th>
             <th>Size:</th>
             <th>Order Date:</th>
             <th>Paid / Unpaid: </th>
             <th>Status: </th>
                   
          </tr> <!--- tr ends --->
           
       </thread> <!--- thread ends --->
       
       <tbody> <!--- tbody start --->
                 
         <?php  
           
           $customer_session = $_SESSION['customer_email'];
           
           $get_customer = "select * from customers where customer_email='$customer_session'";
           
           $run_customer = mysqli_query($con,$get_customer);
           
           $row_customer = mysqli_fetch_array($run_customer);
           
           $customer_id = $row_customer['customer_id'];
           
           $get_orders = "select * from customer_orders where customer_id='$customer_id'";
           
           $run_orders = mysqli_query($con,$get_orders);
           
           $i = 0;
           
           while($row_orders = mysqli_fetch_array($run_orders)){
               
               $order_id = $row_orders['order_id'];
               
               $due_amount = $row_orders['due_amount'];
               
               $invoice_no = $row_orders['invoice_no'];
               
               $qty = $row_orders['qty'];
               
               $size = $row_orders['size'];
               
               $order_date = substr($row_orders['order_date'],0,11);
               
               $order_status = $row_orders['order_status'];
               
               $i++;
               
               if($order_status=='pending'){
                   
                   $order_status = 'Unpaid';
     
               }else{
                   
                   $order_status = 'Paid';              
                   
               }

           
         ?>
          
          <tr> <!--- tr start --->
             
             <th> <?php echo $i; ?> </th>
             <td> MYR <?php echo $due_amount; ?> </td>
             <td> <a href="view_invoice.php?order_id=<?php echo $order_id; ?>"><?php echo $invoice_no; ?></a> </td>
             <td> <?php echo $qty; ?> </td>
             <td> <?php echo $size; ?> </td>
             <td> <?php echo $order_date; ?> </td> 
             <td> <?php echo $order_status; ?></td>
             
             <td>
                
                <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paymnent </a>
                 
             </td>


          </tr> <!--- tr end --->
          
          <?php } ?>
           
       </tbody> <!--- tbody ends --->
    
    </table> <!--- table table-bordered table-hover ends --->
    
</div>  <!--- table-responsive ends --->