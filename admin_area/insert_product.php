<?php 

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Insert Product</title>
    
</head>

<body>
 
<div class="row"> <!--- row starts --->
    
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
    
    <br/> <!--- NEWLINE --->
        
    <br/> <!--- NEWLINE --->
     
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
       
       <ol class="breadcrumb"> <!--- breadcrumb starts --->
          
          <li class="active"> <!--- class starts --->
             
             <i class="fa fa-dashboard"></i> Dashboard / Insert Products
              
          </li> <!--- class ends --->
                    
       </ol> <!--- breadcrumb finish --->
       
    </div> <!--- col-lg-12 ends --->
      
</div> <!--- row ends --->
  
<div class="row"> <!--- row starts --->
    
    <div class="col-lg-12"> <!--- col-lg-12 starts --->
        
       <div class="panel panel-default"> <!--- panel-default starts --->
          
          <div class="panel-heading">  <!--- panel-heading starts --->
             
             <h3 class="panel-title"> <!--- panel-title starts --->
                
                <i class="fa fa-money fa-fw"></i> Insert Product
                 
             </h3> <!--- panel-title ends --->
              
          </div> <!--- panel-heading ends --->   
          
          <div class="panel-body"> <!--- panel-body starts --->
             
             <form method="post" class="form-horizontal" enctype="multipart/form-data"> <!--- form starts --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Title </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_title" type="text" class="form-control" required>  
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_title --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Category </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                     
                     <select name="product_cat" class="form-control"> 
                       
                       <option>Select A Category Product</option>
                       
                            <?php 
                              
                              $get_p_cats = "select * from product_category";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                            ?>    
                         
                     </select>

                   </div>   <!--- col-md-6 end ---> 
                                
                </div> <!--- form-group ends ---> <!--- product_cat --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Category </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                     
                     <select name="cat" class="form-control"> 
                       
                       <option>Select A Category </option>
                       
                            <?php 
                              
                              $get_cats = "select * from category";
                              $run_cats = mysqli_query($con,$get_cats);
                              
                              while ($row_cats=mysqli_fetch_array($run_cats)){
                                  
                                  $cat_id = $row_cats['cat_id'];
                                  $cat_title = $row_cats['cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                            ?>    
                         
                     </select>

                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends --->  <!--- cat --->
                    
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Image 1 </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_Img1" type="file" class="form-control" required>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img1 --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Image 2 </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_Img2" type="file" class="form-control" required>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img2 --->
                 
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Image 3 </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_Img3" type="file" class="form-control" required>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img3 --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Price </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_price" type="text" class="form-control" required>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_price --->
                    
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Keyword </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_keyword" type="text" class="form-control" required>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_keyword --->
                 
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Description </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_desc --->
                    
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"></label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                     
                     <input type="submit" value="Insert Product" name="submit" class="btn btn-primary form-control">
                              
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- submit product --->                             
                     
             </form> <!--- form ends --->
      
          </div> <!--- panel-body ends --->
            
       </div>  <!--- panel-default ends --->
           
    </div> <!--- col-lg-12 ends --->
    
</div> <!--- row ends --->

</body>
</html>

<?php

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keyword = $_POST['product_keyword'];
    $product_desc = $_POST['product_desc'];
    
    $product_Img1 = $_FILES['product_Img1']['name'];
    $product_Img2 = $_FILES['product_Img2']['name'];
    $product_Img3 = $_FILES['product_Img3']['name'];
    
    $temp_name1 = $_FILES['product_Img1']['tmp_name'];
    $temp_name2 = $_FILES['product_Img2']['tmp_name'];
    $temp_name3 = $_FILES['product_Img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_Img1");
    move_uploaded_file($temp_name2,"product_images/$product_Img2");
    move_uploaded_file($temp_name3,"product_images/$product_Img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keyword,product_desc) values ('$product_cat','$cat',NOW(),'$product_title','$product_Img1','$product_Img2','$product_Img3','$product_price','$product_keyword','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted into the database sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }else{
        
    
    }
    
}

?>

<?php } ?>









