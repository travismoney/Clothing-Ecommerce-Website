<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?> 

<div class="row"> <!--- row 1 starts --->
  
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
        
    <br/> <!--- NEWLINE --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <ol class="breadcrumb">  <!--- breadcrumb starts --->
           
            <li class="active">  <!--- li active starts --->
               
               <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li>  <!--- li active ends --->
            
        </ol>  <!--- breadcrumb ends --->
        
    </div>  <!--- col-lg-12 ends --->
    
</div> <!--- row 1 ends --->

<div class="row"> <!--- row 2 starts --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <div class="panel panel-default"> <!--- panel panel-default starts --->
           
            <div class="panel-heading"> <!--- panel-heading starts --->
              
              <h3 class="panel-title"> <!--- panel-title starts --->
                 
                 <i class="fa fa-tag"></i> View Products
                  
              </h3> <!--- panel-title ends --->
            
            </div> <!--- panel-heading ends --->
            
            <div class="panel-body"> <!--- panel-body starts --->
               
                <div class="table-responsive"> <!--- table-responsive starts --->
                   
                    <table class="table table-striped table-bordered table-hover"> <!--- table-bordered table-hover starts --->
                       
                       <thread> <!--- thread starts --->
                          
                           <tr> <!--- tr starts --->
                              
                               <th> Product ID: </th>
                               <th> Product Title: </th>
                               <th> Product Image: </th>
                               <th> Product Price: </th>
                               <th> Product Sold: </th>
                               <th> Product Keywords: </th>
                               <th> Product Date: </th>
                               <th> Product Delete: </th>
                               <th> Product Edit: </th>
                               
                           </tr> <!--- tr ends --->
                           
                       </thread> <!--- thread ends --->
                       
                       <tbody> <!--- tbody starts --->
                       
                       <?php
                            
                            $i=0;
      
                            $get_pro = "select * from products";
                            
                            $run_products = mysqli_query($con,$get_pro);
      
                            while($row_pro=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_pro['product_id'];
                             
                                $pro_title = $row_pro['product_title'];
                              
                                $pro_Img1 = $row_pro['product_Img1'];
                              
                                $pro_price = $row_pro['product_price'];
                               
                                $pro_keyword = $row_pro['product_keyword'];

                                $pro_date = $row_pro['date'];
                                
                                $i++;
      
                       ?>
                       
                       <tr> <!--- tr starts --->
                          
                           <td> <?php echo $i; ?> </td>
                           
                           <td> <?php echo $pro_title; ?> </td>
                           
                           <td> <img src="product_images/<?php echo $pro_Img1; ?>" width="60" height="60"> </td>
                           
                           <td> MYR <?php echo $pro_price; ?> </td>
                           
                           <td> <?php 
                           
                                 $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                 
                                 $run_sold = mysqli_query($con,$get_sold);
                                
                                 $count = mysqli_num_rows($run_sold);
                                
                                 echo $count;
                               
                                ?> 
                                 
                           </td>
                           
                           <td> <?php echo $pro_keyword; ?> </td>
                           
                           <td> <?php echo $pro_date; ?> </td>
                           
                           <td> 
                           
                               <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                  
                                  <i class="fa fa-trash-o"></i> Delete
                                   
                               </a> 
                               
                           </td>
                           
                           <td>
                              
                               <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                  
                                  <i class="fa fa-pencil"></i> Edit
                                   
                               </a>
    
                           </td>
 
                       </tr> <!--- tr ends --->
                       
                       <?php } ?>

                       </tbody> <!--- tbody ends --->
                        
                    </table> <!--- table-bordered table-hover starts --->
                    
                </div> <!--- table-responsive ends --->
                
            </div> <!--- panel-body ends --->
            
        </div> <!--- panel panel-default ends --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 2 ends --->


<?php } ?>