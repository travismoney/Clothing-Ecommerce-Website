<?php 

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<?php 

    if(isset($_GET['edit_product'])){
        
        $edit_id = $_GET['edit_product'];
        
        $get_p = "select * from products where product_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['product_id'];
        
        $p_title = $row_edit['product_title'];
        
        $p_cat = $row_edit['p_cat_id'];
        
        $cat = $row_edit['cat_id'];
        
        $p_image1 = $row_edit['product_Img1'];
        
        $p_image2 = $row_edit['product_Img2'];
        
        $p_image3 = $row_edit['product_Img3'];
        
        $p_price = $row_edit['product_price'];
        
        $p_keyword = $row_edit['product_keyword'];
        
        $p_desc = $row_edit['product_desc'];
        
    }
        
        $get_p_cat = "select * from product_category where p_cat_id='$p_cat'";
        
        $run_p_cat = mysqli_query($con,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $get_cat = "select * from category where cat_id='$cat'";
        
        $run_cat = mysqli_query($con,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];

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
             
             <i class="fa fa-dashboard"></i> Dashboard / Edit Products
              
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
                      
                      <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">  
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_title --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Category </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                     
                     <select name="product_cat" class="form-control"> 
                       
                       <option value="<?php echo $p_cat; ?>"> <?php echo $p_cat_title; ?> </option>
                       
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
                       
                       <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>
                       
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
                      
                      <input name="product_Img1" type="file" class="form-control">
                      
                      <br>
                      
                      <img width="150" height="150" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img1 --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Image 2 </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_Img2" type="file" class="form-control">
                      
                      <br>
                      
                      <img width="150" height="150" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img2 --->
                 
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Image 3 </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_Img3" type="file" class="form-control">
                      
                      <br>
                      
                      <img width="150" height="150" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_Img3 --->
                
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Price (MYR) </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_price" type="text" class="form-control" required value="<?php echo $p_price; ?>">
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_price --->
                    
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Keyword </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <input name="product_keyword" type="text" class="form-control" required value="<?php echo $p_keyword; ?>">
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_keyword --->
                 
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"> Product Description </label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                      
                      <textarea name="product_desc" cols="19" rows="16" class="form-control"><?php echo $p_desc; ?></textarea>
                       
                   </div>   <!--- col-md-6 end --->
                                
                </div> <!--- form-group ends ---> <!--- product_desc --->
                    
                <div class="form-group"> <!--- form-group starts --->
                   
                   <label class="col-md-3 control-label"></label>
                   
                   <div class="col-md-6">  <!--- col-md-6 start --->
                     
                        <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                              
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

if(isset($_POST['update'])){
    
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
    
    $update_product = "update products set 
    p_cat_id='$product_cat',
    
    cat_id='$cat',
    
    date=NOW(),
    
    product_title='$product_title',
    
    product_Img1='$product_Img1',
    
    product_Img2='$product_Img2',
    
    product_Img3='$product_Img3',
    
    product_keyword='$product_keyword',
    
    product_desc='$product_desc',
    
    product_price='$product_price' 
    
    where product_id='$p_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Your product has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_products','_self')</script>"; 
        
    }
    
}

?>

<?php } ?>









