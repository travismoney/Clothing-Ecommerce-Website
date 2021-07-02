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
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Product Category
                
            </li>
            
        </ol> <!---ol breadcrumb ends  --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 1 ends --->

<div class="row"> <!--- row 2 starts --->
   
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
        <div class="panel panel-default"> <!--- panel panel-default starts --->
           
            <div class="panel-heading"> <!--- panel-heading starts --->
               
                <h3 class="panel-title">  <!--- panel-title starts --->
                   
                    <i class="fa fa-money fa-fw"></i> Insert Product Category
                    
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
                           
                            <input name="p_cat_title" type="text" class="form-control">
                            
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                <!--  PRODUCT CATEGORY DESCRIPTION -->
                    
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              Product Category Description 
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                           
                            <textarea type="text" name="p_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
                            
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                <!--  PRODUCT CATEGORY DESCRIPTION -->
                    
                    <div class="form-group">  <!--- form-group starts --->
                       
                        <label for="" class="control-label col-md-3">
                        
                              
                        </label>
                        
                        <div class="col-md-6"> <!--- col-md-6 starts --->
                          
                          <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div> <!--- col-md-6 ends --->
                    
                    </div> <!--- form-group ends --->
                    
                </form>  <!--- form-horizontal ends --->
                
            </div>  <!--- panel-body ends --->
            
        </div> <!--- panel panel-default ends --->
        
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row 2 ends  --->

<?php  

          if(isset($_POST['submit'])){
              
              $p_cat_title = $_POST['p_cat_title'];
              
              $p_cat_desc = $_POST['p_cat_desc'];
              
              $insert_p_cat = "insert into product_category (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";
              
              $run_p_cat = mysqli_query($con,$insert_p_cat);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Your New Product Category Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?view_p_cats','_self')</script>";
                  
              }
              
          }

?>


<?php } ?>