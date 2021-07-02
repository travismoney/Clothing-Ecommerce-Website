<?php
    
    include("includes/header.php");

?>
   
<div class="container" id="slider"> <!--- container slider start --->
       
       <div class="col-md-12">  <!--- col-md-12 start --->
          
          <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--- carousel start --->
              
              <ol class="carousel-indicators"> <!--- carosel-indicators start --->
                  
                  <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  
              </ol> <!--- carosel-indicators finish --->
              
               <div class="carousel-inner"> <!--- carousel inner start --->
                
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 1,2";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 2,0";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
              
               </div> <!--- carousel inner finish --->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--- left carousel-control start --->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a> <!--- left carousel-control finish --->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--- right carousel-control start --->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a> <!--- right carousel-control finish --->
              
          </div> <!--- carousel finish --->
           
       </div>  <!--- col-md-12 finish --->
       
   </div>  <!--- container slider End -->
   
<div id="advantages"> <!--- advantages start -->
      
      <div class="container"> <!--- container start -->
         
         <div class="same-height-row"> <!--- same-height-row start -->
            
            <div class="col-sm-4"> <!--- col-sm-4 start -->
               
               <div class="box same-height"><!--- box same-height start -->
                 
                 <div class="icon"> <!--- icon start -->
                    
                    <i style="color: #ffcccb" class="fa fa-heart"></i>
                     
                 </div> <!--- icon finish -->
                 
                 <h3 style="color: black;"><a href="#">We Love Our Customer</a></h3>
                 
                  <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                   
               </div> <!--- box same-height finish -->
                
            </div> <!--- col-sm-4 finish -->
            
            <div class="col-sm-4"> <!--- col-sm-4 start -->
               
               <div class="box same-height"><!--- box same-height start -->
                 
                 <div class="icon"> <!--- icon start -->
                    
                    <i style="color: #ffcccb" class="fa fa-tag"></i>
                     
                 </div> <!--- icon finish -->
                 
                 <h3 style="color: black;"><a href="#">Best Prices</a></h3>
                 
                  <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                   
               </div> <!--- box same-height finish -->
                
            </div> <!--- col-sm-4 finish --> 
            
              <div class="col-sm-4"> <!--- col-sm-4 start -->
               
               <div class="box same-height"><!--- box same-height start -->
                 
                 <div class="icon"> <!--- icon start -->
                    
                    <i style="color: #ffcccb" class="fa fa-thumbs-up"></i>
                     
                 </div> <!--- icon finish -->
                 
                 <h3 style="color: black;"><a href="#">100% Original Products</a></h3>
                 
                  <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                   
               </div> <!--- box same-height finish -->
                
            </div> <!--- col-sm-4 finish -->
            
         </div> <!--- same-height-row finish -->
          
      </div> <!--- container finish start -->
       
   </div> <!--- advantages End -->
   
<div id="hot"> <!--- hot start -->
      
      <div class="box"> <!--- box start -->
         
         <div class="container">  <!--- container start -->
            
            <div class="col-md-12">  <!--- col-md-12 start -->
               
               <h2>New Arrivals</h2>
                
            </div> <!--- col-md-12 finish -->
                        
         </div>  <!--- container start -->
          
      </div> <!--- box finish -->
       
   </div> <!--- hot finish -->
   
<div class="container" id="content"> <!--- container End -->
   
   <div class="row"> <!--- row start --->
    
     <?php
       
       getPro(); // Getting Recent Products that has been included by admin
       
      ?>
      
   </div> <!--- row End -->
    
</div> <!--- container End -->
   
   <?php 
    
    include("includes/footer.php")
    
   ?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    <!--- TME2104 WEB BASED SYSTEM DEVELOPMENT PROJECT  --->
    <!--- GROUP 2 MADAM AMELIA  --->
    <!--- Designed and Developed Fully by Travis Iran Money  --->
    <!--- Not to be used for other purposes --->
    <!--- Current Version: Test 1A ---->
    
    <!-- Not Working -->
    <!-- A. Toggling between Men and Women Category -->
    
    
</body>
</html>