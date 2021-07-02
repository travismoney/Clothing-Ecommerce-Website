<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<?php
    
    if(isset($_GET['edit_p_cat'])){
        
        $edit_p_cat_id = $_GET['edit_p_cat'];
        
        $edit_p_cat_query = "select * from product_category where p_cat_id='$edit_p_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_p_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_cat_id = $row_edit['p_cat_id'];
        
        $p_cat_title = $row_edit['p_cat_title'];
        
        $p_cat_desc = $row_edit['p_cat_desc'];

        
    }
   
?>

<div class="row">  <!--- row starts --->
  
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
        
    <br/> <!--- NEWLINE --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <ol class="breadcrumb"> <!--- ol breadcrumb starts --->
           
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
                
            </li>
            
        </ol> <!---ol breadcrumb ends  --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 1 ends --->

<div class="row"> <!--- row 2 starts --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <div class="panel panel-default"> <!--- panel panel-default starts --->
           
            <div class="panel-heading"> <!--- panel-heading starts --->
               
                <h3 class="panel-title">  <!--- panel-title starts --->
                   
                    <i class="fa fa-pencil fa-fw"></i> Edit Category
                    
                </h3>  <!--- panel-title ends --->
                 
            </div>  <!--- panel-heading ends --->
            
            <div class="panel-body">  <!--- panel-body starts --->
               
                <form action="" class="form-horizontal" method="post">  <!--- form-horizontal starts --->
                  
                <!--  PRODUCT CATEGORY TITLE -->
                   
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              Product Category Title 
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                           
                            <input value="<?php echo $p_cat_title; ?>" name="p_cat_title" type="text" class="form-control">
                            
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                <!--  PRODUCT CATEGORY DESCRIPTION -->
                    
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              Product Category Description 
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                           
                            <textarea type="text" name="p_cat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $p_cat_desc;?></textarea>
                            
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                <!--  PRODUCT CATEGORY DESCRIPTION -->
                    
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                          
                          <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                </form>  <!--- form-horizontal ends --->
                
            </div>  <!--- panel-body ends --->
            
        </div> <!--- panel panel-default ends --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 2 ends  --->

<?php  

    if(isset($_POST['update'])){
              
        $p_cat_title = $_POST['p_cat_title'];
              
        $p_cat_desc = $_POST['p_cat_desc'];
              
        $update_p_cat = "update product_category set p_cat_title='$p_cat_title',p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
              
        $run_p_cat = mysqli_query($con,$update_p_cat);
              
        if($run_p_cat){
                  
            echo "<script>alert('Product Category has been Successfully updated into Database!')</script>";
                  
            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
                     
        }
              
    }

?>


<?php } ?>