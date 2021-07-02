<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
      
?>
 
 <div class="row"> <!--- row 1 starts --->
  
  <br/>
  <br/>
    
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb"> <!--- ol-breadcrumb starts --->
           
            <li class="active">  <!--- li active starts --->
               
               <i class="fa fa-dashboard"></i> Dashboard
               
            </li> <!--- li active ends --->
            
        </ol>  <!--- ol-breadcrumb ends --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 1 ends --->

<div class="row"> <!--- row 2 starts --->
   
    <div class="col-lg-3 col-md-6"> <!--- col-lg-3 col-md-6 starts --->
       
        <div class="panel panel-primary"> <!--- panel panel-primary starts --->
          
          <div class="panel-heading"> <!--- panel-heading starts --->
             
              <div class="row"> <!--- row starts --->
                 
                  <div class="col-xs-3"> <!--- col-xs-3 starts --->
                  
                      <i class="fa fa-tasks fa-5x"></i>
                      
                 </div> <!--- col-xs-3 ends --->
                 
                 <div class="col-xs-9 text-right"> <!--- col-xs-9 text-right start --->
                    
                     <div class="huge"> <!--- div huge starts --->
                      
                      <?php echo $count_products; ?>
                       
                     </div> <!--- div huge end --->
                        
                         <div> Products </div>
                     
                 </div> <!--- col-xs-9 text-right end --->
                  
              </div> <!--- row ends --->
              
          </div> <!--- panel-heading ends --->
           
           <a href="index.php?view_products"> <!--- ahref starts --->
               
               <div class="panel-footer"> <!--- panel-footer starts --->
               
                   <span class="pull-left"> View Details </span>
                   
                   <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                   
                   <div class="clearfix"></div>
               
               </div>  <!--- panel-footer ends --->
               
           </a> <!--- ahref ends --->
            
        </div> <!--- panel panel-primary ends --->
        
    </div> <!--- col-lg-3 col-md-6 ends --->
    
    <div class="col-lg-3 col-md-6"> <!--- col-lg-3 col-md-6 starts --->
       
        <div class="panel panel-green"> <!--- panel panel-green starts --->
          
          <div class="panel-heading"> <!--- panel-heading starts --->
             
              <div class="row"> <!--- row starts --->
                 
                  <div class="col-xs-3"> <!--- col-xs-3 starts --->
                  
                      <i class="fa fa-users fa-5x"></i>
                      
                 </div> <!--- col-xs-3 ends --->
                 
                 <div class="col-xs-9 text-right"> <!--- col-xs-9 text-right start --->
                    
                     <div class="huge"> <!--- div huge starts --->
                      
                      <?php echo $count_customers; ?>
                       
                     </div> <!--- div huge end --->
                        
                         <div> Customers </div>
                     
                 </div> <!--- col-xs-9 text-right end --->
                  
              </div> <!--- row ends --->
              
          </div> <!--- panel-heading ends --->
           
           <a href="index.php?view_customers"> <!--- ahref starts --->
               
               <div class="panel-footer"> <!--- panel-footer starts --->
               
                   <span class="pull-left"> View Details </span>
                   
                   <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                   
                   <div class="clearfix"></div>
               
               </div>  <!--- panel-footer ends --->
               
           </a> <!--- ahref ends --->
            
        </div> <!--- panel panel-green ends --->
        
    </div> <!--- col-lg-3 col-md-6 ends --->
    
    <div class="col-lg-3 col-md-6"> <!--- col-lg-3 col-md-6 starts --->
       
        <div class="panel panel-orange"> <!--- panel panel-orange starts --->
          
          <div class="panel-heading"> <!--- panel-heading starts --->
             
              <div class="row"> <!--- row starts --->
                 
                  <div class="col-xs-3"> <!--- col-xs-3 starts --->
                  
                      <i class="fa fa-tags fa-5x"></i>
                      
                 </div> <!--- col-xs-3 ends --->
                 
                 <div class="col-xs-9 text-right"> <!--- col-xs-9 text-right start --->
                    
                     <div class="huge"> <!--- div huge starts --->
                      
                      <?php echo $count_p_categories; ?>
                       
                     </div> <!--- div huge end --->
                        
                         <div> Product Categories </div>
                     
                 </div> <!--- col-xs-9 text-right end --->
                  
              </div> <!--- row ends --->
              
          </div> <!--- panel-heading ends --->
           
           <a href="index.php?view_p_cats"> <!--- ahref starts --->
               
               <div class="panel-footer"> <!--- panel-footer starts --->
               
                   <span class="pull-left"> View Details </span>
                   
                   <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                   
                   <div class="clearfix"></div>
               
               </div>  <!--- panel-footer ends --->
               
           </a> <!--- ahref ends --->
            
        </div> <!--- panel panel-orange ends --->
        
    </div> <!--- col-lg-3 col-md-6 ends --->
    
    <div class="col-lg-3 col-md-6"> <!--- col-lg-3 col-md-6 starts --->
       
        <div class="panel panel-red"> <!--- panel panel-redstarts --->
          
          <div class="panel-heading"> <!--- panel-heading starts --->
             
              <div class="row"> <!--- row starts --->
                 
                  <div class="col-xs-3"> <!--- col-xs-3 starts --->
                  
                      <i class="fa fa-shopping-cart fa-5x"></i>
                      
                 </div> <!--- col-xs-3 ends --->
                 
                 <div class="col-xs-9 text-right"> <!--- col-xs-9 text-right start --->
                    
                     <div class="huge"> <!--- div huge starts --->
                      
                      <?php echo $count_pending_orders; ?>
                       
                     </div> <!--- div huge end --->
                        
                         <div> Orders </div>
                     
                 </div> <!--- col-xs-9 text-right end --->
                  
              </div> <!--- row ends --->
              
          </div> <!--- panel-heading ends --->
           
           <a href="index.php?view_orders"> <!--- ahref starts --->
               
               <div class="panel-footer"> <!--- panel-footer starts --->
               
                   <span class="pull-left"> View Details </span>
                   
                   <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                   
                   <div class="clearfix"></div>
               
               </div>  <!--- panel-footer ends --->
               
           </a> <!--- ahref ends ---> 
            
        </div> <!--- panel panel-red ends --->
        
    </div> <!--- col-lg-3 col-md-6 ends --->
    
</div> <!--- row 2 ends --->

<div class="row"> <!--- row 3 start --->
   
    <div class="col-lg-8"> <!--- col-lg-8 start --->
       
        <div class="panel panel-primary"> <!--- panel panel-primary start --->
           
            <div class="panel-heading"> <!--- panel-heading start --->
               
                <h3 class="panel-title"> <!--- panel-title start --->
                   
                   <i class="fa fa-money"></i> New Orders
                    
                </h3> <!--- panel-title end --->
                
            </div> <!--- panel-heading end --->
            
            <div class="panel-body"> <!--- panel-body start --->
               
                <div class="table-responsive"> <!--- table-responsive start --->
                   
                    <table class="table table-hover table-striped table-bordered"> <!--- table table-hover start --->
                      
                      <thread> <!--- thread start --->
                        
                        <tr> <!--- th start --->
                         
                          <th> Order No: </th>
                          <th> Customer Email: </th>
                          <th> Invoice No: </th>
                          <th> Product ID: </th>
                          <th> Product Qty: </th>
                          <th> Product Size: </th>
                          <th> Payment Status: </th>
                          
                        </tr> <!--- th end --->
                          
                      </thread> <!--- thread ends --->
                       
                       <tbody> <!--- tbody start --->
                         
                         <?php 
                            
                            $i=0;
                            
                            $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,6";
      
                            $run_order = mysqli_query($con,$get_order);
      
                            while($row_order=mysqli_fetch_array($run_order)){
                                
                                $order_id = $row_order['order_id'];
                                
                                $c_id = $row_order['customer_id'];
                                
                                $invoice_no = $row_order['invoice_no'];
                                
                                $product_id = $row_order['product_id'];
                                
                                $qty = $row_order['qty'];
                                
                                $size = $row_order['size'];
                                
                                $order_status = $row_order['order_status'];
                                
                                $i++;
      
                         ?>
                          
                           <tr>  <!--- tr start --->
                              
                               <td> <?php echo $order_id; ?> </td>
                               <td>
                               
                               <?php 
                                
                                    $get_customer = "select * from customers where customer_id='$c_id'";
                                
                                    $run_customer = mysqli_query($con,$get_customer);
                                
                                    $row_customer = mysqli_fetch_array($run_customer);
                                
                                    $customer_email = $row_customer['customer_email'];
                                
                                    echo $customer_email;
                                   
                               ?> 
                                  
                               </td>
                               
                               <td> <?php echo $invoice_no ?> </td>
                               <td> <?php echo $product_id ?> </td>
                               <td> <?php echo $qty ?> </td>
                               <td> <?php echo $size ?> </td>
                               <td> 
                               
                               <?php 
                                   
                                   if($order_status=='pending'){
                                       
                                       echo $order_status='Pending';
                                       
                                   }else{
                                       
                                       echo $order_status='Completed';
                                        
                                   } 
                                   
                               ?> 
                               
                               
                               </td>
                               
                           </tr> <!--- tr end --->    
                           
                        <?php } ?>                      
                           
                       </tbody>  <!--- tbody ends --->
                        
                    </table> <!--- table table-hover end --->
                    
                </div> <!--- table-responsive end --->
                
                <div class="text-right"> <!--- text-right start --->
                    
                    <a href="index.php?view_orders"> <!--- ahref start --->
                       
                       View All Orders <i class="fa fa-arrow-circle-right"></i>
                       
                    </a> <!--- ahref end --->
                    
                </div> <!--- text-right end --->
                
            </div> <!--- panel-body end --->
            
        </div> <!--- panel panel-primary end --->
        
    </div> <!--- col-lg-8 ends --->
    
    <div class="col-md-4"> <!--- col-md-4 start --->
    
        <div class="panel"> <!--- panel start --->
       
            <div class="panel-body"> <!--- panel-body start --->
           
                <div class="mb-md thumb-info"> <!--- mb-md thumb-info start --->
            
                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
                    
                    <div class="thumb-info-title"> <!--- thumb-info-title start --->
                    
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                        
                    </div> <!--- thumb-info-title end --->
            
                </div> <!--- mb-md thumb-info end --->
                
                <div class="mb-md"> <!--- mb-md start --->
                   
                    <div class="widget-content-expanded"> <!--- widget-content-expanded start --->
                       
                        <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br/>
                        <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
                        <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>
                        
                    </div> <!--- widget-content-expanded end --->
                    
                    <hr class="dotted short">
                    
                    <h5 class="text-muted"> About Me </h5> 
                    
                    <p> <?php echo $admin_about; ?> </p>
                    
                </div> <!--- mb-md end --->
            
            </div> <!--- panel-body ends --->
        
        </div> <!--- panel ends --->
    
    </div> <!--- col-md-4 end --->
      
    <!-- SALES STATISTIC -->
       
    <div class="col-lg-12">  <!--- col-lg-12 starts --->
                        
        <?php include("chart/index.php"); ?>
                         
    </div>  
        
</div> <!--- row 3 ends --->



<?php } ?>









