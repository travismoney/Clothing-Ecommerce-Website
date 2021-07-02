<?php

    $active='Cart';
    include("includes/header.php");

?>
  
<?php add_cart(); ?>
   
<div id="content"> <!--- Content Start --->
   
    <div class="container"> <!--- Container Start --->
       
        <div class="col-md-12"> <!--- col-md-12 Start --->
           
           <ul class="breadcrumb"> <!--- breadcrumb Start --->
               <li>
                   <a href="index.php">Home</a>
               </li>
               <li>
                   Shop
               </li>
               
               <li>
                  <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   
               </li>
               
                <li> <?php echo $pro_title; ?> </li> 
               
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        
        <div class="col-md-12"> <!--- col-md-9 Start --->
           
            <div id="productMain" class="row"> <!--- productMain Start --->
               
                <div class="col-sm-6"> <!--- col-sm-6 Start --->
                   
                    <div id="mainImage"> <!--- mainImage Start --->
                       
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--- myCarousel Start --->
                           
                            <ol class="carousel-indicators"> <!--- carousel-indicators Start --->
                                <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>  <!--- slider goes to image 1 --->
                                <li data-target="#myCarousel" data-slide-to="1"></li> <!--- slider goes to image 2 --->
                                <li data-target="#myCarousel" data-slide-to="2"></li> <!--- slider goes to image 3 --->
                            </ol> <!--- carousel-indicators End --->
                            
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center>
                                        <img width="540" height="600" src="admin_area/product_images/<?php echo $pro_Img1; ?>" alt="view_1">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img width="540" height="600" src="admin_area/product_images/<?php echo $pro_Img2; ?>" alt="view_2">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img width="540" height="600" src="admin_area/product_images/<?php echo $pro_Img3; ?>" alt="view_3">
                                    </center>
                                </div>
                            </div>
    
                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--- left carousel-control start --->
                               <span class="glyphicon glyphicon-chevron-left"></span>
                               <span class="sr-only">Previous</span>           
                            </a> <!--- left carousel-control finish --->
                            
                            <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--- left carousel-control start --->
                               <span class="glyphicon glyphicon-chevron-right"></span>
                               <span class="sr-only">Next</span>           
                            </a> <!--- right carousel-control finish --->
                            
                        </div> <!--- myCarousel End --->
                        
                    </div> <!--- mainImage End --->
                    
                </div> <!--- col-sm-6 End --->
                                            
                <div class="col-sm-6"> <!--- col-sm-6 Start --->
                   
                    <div class="box"> <!--- Box Start --->
                       
                        <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                          
                          <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"> <!--- form-horizontal Start --->
                             
                              <div class="form-group"> <!--- form-group Start --->
                              
                                  <label for="" class="col-md-5 control-label">Product Quantity</label>
                                  
                                  <div class="col-md-7"> <!--- col-md-7 Start --->
                                       
                                        <select name="product_qty" id="" class="form-control"> <!--- select start --->
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select> <!--- select end --->
                                        
                                  </div> <!--- col-md-7 End --->
                              
                              </div> <!--- form-group End --->
                              
                              <div class="form-group"> <!--- form-group start --->
                                 
                                  <label class="col-md-5 control-label">Product Size</label> 
                                  
                                  <div class="col-md-7"> <!--- col-md-7 Start --->
                                     
                                       <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"><!-- form-control Begin -->
                                          
                                           <option disabled selected>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>
                                           
                                       </select><!-- form-control Finish -->
                                      
                                  </div> <!--- col-md-7 End --->
                                  
                              </div>  <!--- form-group End --->
                              
                              <p class="price">MYR <?php echo $pro_price; ?></p>
                              
                              <p class="text-center buttons">
                              
                                  <button class="btn btn-primary i fa fa-shopping-cart"> Add To Cart</button>
                                  
                              </p>
                              
                          </form> <!--- form-horizontal End --->
                        
                    </div>  <!--- Box End --->
                    
                    <div class="row" id="thumbs"> <!--- row thumbs Start --->
                       
                       <div class="col-xs-4"> <!--- col-xs-4 start --->
                       
                           <a data-target="#myCarousel" data-slide-to="0" href="" class="thumb"> <!--- a thumb start --->
                           
                               <img src="admin_area/product_images/<?php echo $pro_Img1; ?>" alt="item_1" class="img-responsive">
                           
                           </a> <!--- a thumb End --->
                       
                       </div> <!--- col-xs-4 End --->
                       
                       <div class="col-xs-4"> <!--- col-xs-4 start --->
                       
                           <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb"> <!--- a thumb start --->
                           
                               <img src="admin_area/product_images/<?php echo $pro_Img2; ?>" alt="item_1" class="img-responsive">
                           
                           </a> <!--- a thumb End --->
                       
                       </div> <!--- col-xs-4 End --->
                       
                       <div class="col-xs-4"> <!--- col-xs-4 start --->
                       
                           <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb"> <!--- a thumb start --->
                           
                               <img src="admin_area/product_images/<?php echo $pro_Img3; ?>" alt="item_1" class="img-responsive">
                           
                           </a> <!--- a thumb End --->
                       
                       </div> <!--- col-xs-4 End --->
                        
                    </div> <!--- row thumbs End --->
                    
                </div> <!--- col-sm-6 End --->
                
            </div> <!--- productMain End --->
            
            <div class="box" id="details"> <!--- box details Start --->
               
               <h4>Product Details</h4>
               
               <p> <?php echo $pro_desc; ?> </p>
               
               <h4>Size</h4>
               
               <ul>
                   <li>Small</li>
                   <li>Large</li>
                   <li>Medium</li>
               </ul>
               
               <br>
                
            </div> <!--- box details End --->
            
            <div class="box" id="details"> <!--- box details Start --->
               
               <h4 style="font-size: 30px;
                          font-weight: 200;
                          color: black;
                          text-align: center;
                          text-transform: uppercase;
                          ">Other Products You May Like</h4>
                
            </div> <!--- box details End --->
            
            <div id="row same-height-row"> <!--- row same-height-row start --->
                               
                <?php 
                
                    $get_products = "select * from products order by rand() LIMIT 0,4";
                    
                    $run_products = mysqli_query($con,$get_products);
                
                    while ($row_products=mysqli_fetch_array($run_products)){
                        
                        $pro_id = $row_products['product_id'];
                        
                        $pro_title = $row_products['product_title'];
                        
                        $pro_Img1 = $row_products['product_Img1'];
                        
                        $pro_price = $row_products['product_price'];
                        
                        echo "
                        
                            <div class='col-md-3 col-sm-6 center-responsive'>
                            
                                <div class='product same-height'>
                                
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                        <img class='img-responsive' src='admin_area/product_images/$pro_Img1'>
                                        
                                    </a>
                                    
                                    <div class='text'>
                                    
                                        <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                    
                                        <p class='price'> MYR $pro_price </p>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div>
                        
                        ";
                        
                    }
                
                ?>
                
            </div> <!--- same-height-row End --->
            
        </div> <!--- col-md-9 End--->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
   
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>