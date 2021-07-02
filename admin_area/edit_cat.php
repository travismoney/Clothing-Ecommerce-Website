<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<?php
    
    if(isset($_GET['edit_cat'])){
        
        $edit_cat_id = $_GET['edit_cat'];
        
        $edit_cat_query = "select * from category where cat_id='$edit_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $cat_id = $row_edit['cat_id'];
        
        $cat_title = $row_edit['cat_title'];
        
        $cat_desc = $row_edit['cat_desc'];

        
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
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Category
                
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
                        
                              Category Title 
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                           
                            <input value="<?php echo $cat_title; ?>" name="cat_title" type="text" class="form-control">
                            
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                <!--  PRODUCT CATEGORY DESCRIPTION -->
                    
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              Category Description 
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                           
                            <textarea type="text" name="cat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $cat_desc;?></textarea>
                            
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
              
        $cat_title = $_POST['cat_title'];
              
        $cat_desc = $_POST['cat_desc'];
              
        $update_cat = "update category set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$cat_id'";
              
        $run_cat = mysqli_query($con,$update_cat);
              
        if($run_cat){
                  
            echo "<script>alert('Category has been Successfully updated into Database!')</script>";
                  
            echo "<script>window.open('index.php?view_cats','_self')</script>";
                     
        }
              
    }

?>


<?php } ?>