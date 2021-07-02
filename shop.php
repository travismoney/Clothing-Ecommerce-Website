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
                   Shop
               </li>
           </ul> <!--- breadcrumb End --->
            
        </div> <!--- col-md-12 End --->
        
        <div class="col-md-3"> <!--- col-md-3 Start --->
           
           <?php include("includes/sidebar.php"); ?>
            
        </div> <!--- col-md-3 End --->
        
        <div class="col-md-9">  <!--- col-md-9 Start --->
         
         <?php 
            
            //if(!isset($_GET['p_cat'])){
                
                //if(!isset($_GET['cat'])){
                    
                echo "
            
                <div class='box'>  <!--- box start --->
               
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi numquam sequi atque, 
                    quas quisquam laborum iusto ipsa, autem, facere in aperiam delectus placeat distinctio deleniti. 
                    Sunt esse doloribus tempore quasi?</p>
    
                </div> <!--- box end--->
                    
                ";
                                         
                //}
            //}
                
         ?>
            
            <div class="row">  <!--- Row Start --->
            
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                             if(!isset($_GET['cat'])){

                                $per_page=9; 

                                if(isset($_GET['page'])){

                                    $page = $_GET['page'];

                                }else{

                                    $page=1;

                                }

                                $start_from = ($page-1) * $per_page;

                                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

                                $run_products = mysqli_query($con,$get_products);

                                while($row_products=mysqli_fetch_array($run_products)){

                                    $pro_id = $row_products['product_id'];

                                    $pro_title = $row_products['product_title'];

                                    $pro_price = $row_products['product_price'];

                                    $pro_Img1 = $row_products['product_Img1'];

                                        echo "

                                        <div class='col-md-4 col-sm-6 center-responsive'>

                                            <div class='product'>

                                                <a href='details.php?pro_id=$pro_id'>

                                                    <img class='img-responsive' src='admin_area/product_images/$pro_Img1'>

                                                </a>

                                                <div class='text'>

                                                    <h3>

                                                        <a href='details.php?pro_id=$pro_id'>

                                                            $pro_title

                                                        </a>

                                                    </h3>

                                                    <p class='price'>

                                                        MYR $pro_price

                                                    </p>

                                                    <p class='button'>

                                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                            View Details

                                                        </a>

                                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                            <i class='fa fa-shopping-cart'></i> Add to Cart

                                                        </a>

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                        ";

                                } // end for while($row_products=mysqli_fetch_array($run_products))

                   ?> 

            </div> <!--- Row End --->
            
            <center>
                <ul class="pagination">
                   
                    <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        "; 
                                 
                            } // end for if(!isset($_GET['cat']))
                            
                        } // end for if(!isset($_GET['p_cat']))
					 
					 ?>

                </ul>
            </center>
               
               <?php 
            
                    getpcatpro(); 
            
                    getCat();

               ?>
 
        </div>  <!--- col-md-9 End--->
        
    </div> <!--- Container End --->
    
</div> <!--- Content End --->
   
    <?php include("includes/footer.php");?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>