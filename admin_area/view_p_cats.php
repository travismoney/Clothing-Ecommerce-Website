<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<div class="row">  <!--- row starts --->
  
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
        
    <br/> <!--- NEWLINE --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <ol class="breadcrumb"> <!--- ol breadcrumb starts --->
           
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Product Categories
                
            </li>
            
        </ol> <!---ol breadcrumb ends  --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 1 ends --->

<div class="row"> <!--- row 2 starts --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <div class="panel panel-default"> <!--- panel panel-default starts --->
           
            <div class="panel-heading"> <!--- panel-heading starts --->
               
                <h3 class="panel-title">  <!--- panel-title starts --->
                   
                    <i class="fa fa-tags fa-fw"></i> View Product Categories
                    
                </h3>  <!--- panel-title ends --->
                 
            </div>  <!--- panel-heading ends --->
            
            <div class="panel-body">  <!--- panel-body starts --->
             
                 <div class="table-responsive"> <!--- table-responsive starts --->
                    
                     <table class="table table-hover table-striped table-bordered"> <!--- table-striped table-bordered starts --->
                        
                         <thread> <!--- thread starts --->
                            
                             <tr> <!--- tr starts --->
                                
                                 <th> Product Category ID </th>
                                 <th> Product Category Title </th>
                                 <th> Product Category Description </th>
                                 <th> Edit Product Category </th>
                                 <th> Delete Product Category </th>
                                 
                             </tr> <!--- tr ends --->
                             
                         </thread> <!--- thread ends --->
                         
                         <tbody> <!--- tbody starts --->
                            
                            <?php
      
                                $i=0;
      
                                $get_p_cats = "select * from product_category";
      
                                $run_p_cats = mysqli_query($con,$get_p_cats);
      
                                while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                    
                                    $p_cat_id = $row_p_cats['p_cat_id'];
                                    
                                    $p_cat_title = $row_p_cats['p_cat_title'];
                                    
                                    $p_cat_desc = $row_p_cats['p_cat_desc'];
                                    
                                    $i++;

                            ?>
                            
                            <tr>  <!--- tr starts --->
                               
                                <td> <?php echo $p_cat_id; ?> </td>
                                <td> <?php echo $p_cat_title; ?> </td>
                                <td width="300"> <?php echo $p_cat_desc; ?> </td>
                                <td>
                                    <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit 
                                    </a> 
                                </td>
                                <td>  
                                    <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a> 
                                </td>
                                
                            </tr> <!--- tr ends --->
                            
                            <?php } ?>
                             
                         </tbody> <!--- tbody ends --->
                         
                     </table> <!--- table-striped table-bordered ends --->
                     
                 </div> <!--- table-responsive ends --->
                
            </div>  <!--- panel-body ends --->
            
        </div> <!--- panel panel-default ends --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 2 ends  --->



<?php } ?>






