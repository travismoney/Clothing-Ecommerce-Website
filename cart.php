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
                   Cart 
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div id="cart" class="col-md-9"> <!--- Cart Start --->
           
           <div class="box"> <!--- Box Start --->
              
              <form action="cart.php" method="post" enctype="multipart/form-data"> <!--- Form Start --->
                 
                 <h1>Shopping Cart</h1>
                 
                 <?php
                  
                  // selecting cart information based on customer's email session from database 
                  
                  $ip_add = getRealIpUser();
                  
                  $select_cart = "select * from cart where ip_add='$ip_add'";
                  
                  $run_cart = mysqli_query($con,$select_cart);
                  
                  $count = mysqli_num_rows($run_cart);
                  
                  
                  ?>
                 
                 <p class="text-muted">You Currently have <?php echo $count; ?> item(s) in your shopping cart</p>
                 
                 <div class="table-responsive"> <!--- table-responsive Start --->
                    
                    <table class="table"> <!--- table Start --->
                       
                       <thread> <!--- thread Start --->
                          
                          <tr> <!--- TR Start --->
                             
                             <th colspan="2">Product</th>
                             <th>Quantity</th>
                             <th>Unit Price</th>
                             <th>Size</th>
                             <th colspan="1">Remove Item</th>
                             <th colspan="2">Sub-Total</th>
                                                
                          </tr>  <!--- TR End --->                  
                           
                       </thread> <!--- thread End --->
                       
                        <tbody> <!--- tbody start --->
                          
                          <?php
                            
                            $total = 0;
                            
                            while($row_cart = mysqli_fetch_array($run_cart)){
                                
                                $pro_id = $row_cart['p_id'];
                                
                                $pro_size = $row_cart['size'];
                                
                                $pro_qty = $row_cart['qty'];
                                
                                $get_products = "select * from products where product_id='$pro_id'";
                                
                                $run_products = mysqli_query($con,$get_products);
                                
                                while($row_products = mysqli_fetch_array($run_products)){
                                    
                                    $product_title = $row_products['product_title'];
                                    
                                    $product_Img1 = $row_products['product_Img1'];
                                    
                                    $only_price = $row_products['product_price'];
                                    
                                    $sub_total = $row_products['product_price']*$pro_qty;
                                    
                                    $total += $sub_total;
                            
                          ?>
                           
                            <tr> <!--- tr start --->
                               
                               <td>
                                   <img class="img-responsive" src="admin_area/product_images/<?php echo $product_Img1; ?>" alt="item_1"> <!--- Product Picture --->
                               </td>
                               
                               <td>
                                   <a href="details.php?pro_id=<?php echo $pro_id?>"> <?php echo $product_title; ?> </a> <!--- Product Name --->
                               </td>
                               
                               <td>
                                   <?php echo $pro_qty; ?> <!--- Quantity --->
                               </td>
                               
                               <td>
                                   MYR <?php echo $only_price; ?> <!--- Pricing --->
                               </td>
                               
                               <td>
                                   <?php echo $pro_size; ?> <!--- Sizing --->
                               </td>
                               
                               <td>
                                   <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"> <!--- Removing item --->
                               </td>
                               
                               <td>
                                   MYR <?php echo $sub_total; ?> <!--- Sub Total--->
                               </td>

                            </tr> <!--- tr end --->
                            
                            <?php } } ?>
                            
                        </tbody> <!--- tbody end --->
                        
                        <tfoot> <!--- tfoot Start --->
                              
                            <tr> <!--- tr Start --->
                               
                               <th colspan="6">Total</th>
                               <th colspan="1">MYR <?php echo $total; ?></th>
      
                            </tr> <!--- tbody End --->  
                                
                        </tfoot> <!--- tfoot End --->
                        
                    </table> <!--- table End --->
                       
                 </div> <!--- table-responsive End --->
                 
                 <div class="box-footer">  <!--- box-footer start --->
                    
                    <div class="pull-left">  <!--- pull-left start --->
                       
                       <a href="index.php" class="btn btn-default">  <!--- btn btn-default start --->
                          
                          <i class="fa fa-chevron-left"></i> Continue Shopping
                           
                       </a> <!--- btn btn-default End --->     
                        
                    </div>  <!--- pull-left End--->
                    
                    <div class="pull-right">  <!--- pull-left start --->
                       
                       <button type="submit" name="update" value="Update Cart" class="btn btn-default">  <!--- btn btn-default start --->
                          
                          <i class="fa fa-refresh"></i> Update Cart
                           
                       </button> <!--- btn btn-default End --->
                       
                        <a href="checkout.php" class="btn btn-default">
                           
                           Checkout Now <i class="fa fa-chevron-right"></i>
                            
                        </a>     
                        
                    </div>  <!--- pull-right End--->
             
                 </div>  <!--- box-footer End --->
                  
              </form> <!--- Form End --->
               
           </div><!--- Box End --->
           
               <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
               
            <div class="box"> <!--- box starts here for products you may like --->
                
                <h4 style="font-size: 30px;
                          font-weight: 200;
                          color: black;
                          text-align: center;
                          text-transform: uppercase;
                          ">Other Products You May Like</h4>
                          
            </div> <!--- box ends here for products you may like --->
            
            <div id="row same-height-row"> <!--- row same-height-row start --->
                               
                <?php random(); ?> <!--- Function to Display Products by Random Limit from 0,4 --->
                
            </div> <!--- same-height-row End --->
            
        </div> <!--- Cart col-md-9 End -->
        
            <div class="col-md-3"> <!--- col-md-3 start -->
               
               <div class="box" id="order-summary"> <!--- box order-summary start -->
                 
                 <div class="box-header"> <!--- box-header start -->
                    
                    <h3>Order Summary</h3>
                     
                 </div> <!--- box-header End -->
                 
                 <p class="text-muted"> <!--- text-muted start -->
                    
                    Shipping Fee and Additional Costs are calculated based on the value you have entered.
                                     
                 </p> <!--- text-muted End -->
                 
                 <div class="table-responsive"> <!--- table-responsive start -->
                    
                    <table class="table"> <!--- table table start -->
                       
                       <tbody> <!--- tbody start -->
                          <tr> <!--- tr start -->
                             
                             <td> Order Sub-Total </td>                     
                             <th> MYR <?php echo $total; ?> </th>
                             
                          </tr> <!--- tr end -->
                          <tr> <!--- tr start -->
                             
                             <td> Shipping and Handling Fees </td>                     
                             <th> MYR 0.00 </th>
                             
                          </tr> <!--- tr end -->
                          <tr> <!--- tr start -->
                             
                             <td> Tax </td>                     
                             <th> MYR 0.00 </th>
                             
                          </tr> <!--- tr end -->
                          <tr class="total"> <!--- tr start -->
                             
                             <td> Sub-Total </td>                     
                             <th> MYR <?php echo $total; ?> </th>
                             
                          </tr> <!--- tr end -->
                       </tbody> <!--- tbody end -->
               
                    </table> <!--- table table End -->
             
                 </div> <!--- table-responsive End -->
                                       
               </div> <!--- box order-summary End -->
                
            </div> <!--- col-md-3 End -->
  
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
  
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>