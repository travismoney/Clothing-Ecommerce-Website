<?php

if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>
   
  <nav class="navbar navbar-inverse navbar-fixed-top"> <!--- navbar navbar-inverse navbar-fixed-top starts --->
   
    <div class="navbar-header"> <!--- navbar-header starts --->
       
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <!--- navbar-toggle starts --->
          
          <span class="sr-only">Toggle Navigation</span>
          
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
           
       </button> <!--- navbar-toggle ends --->
       
       <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div> <!--- navbar-header ends --->
    
    <ul class="nav navbar-right top-nav"> <!--- nav navbar-right top-nav starts --->
       
       <li class="dropdown"> <!--- li dropdown starts --->
          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <!--- dropdown-toggle starts --->
            
            <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
              
          </a>  <!--- dropdown-toggle ends --->
          
          <ul class="dropdown-menu"> <!--- dropdown-menu starts --->
             
             <li>  <!--- li starts --->
                
                 <a href="index.php?user_profile=<?php echo $admin_id; ?>">  <!--- ahref starts ---> <!--- USER PROFILE ---> 
                    
                    <i class="fa fa-fw fa-user"></i> Profile
                     
                 </a>  <!--- ahref ends --->
                 
             </li>  <!--- li ends  --->
             
             <li>  <!--- li starts --->
                
                 <a href="index.php?view_products">  <!--- ahref starts ---> <!--- VIEW PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-envelope"></i> Products
                    
                    <span class="badge"><?php echo $count_products ?></span>
                     
                 </a>  <!--- ahref ends --->
                 
             </li>  <!--- li ends  --->
             
             <li>  <!--- li starts --->
                
                 <a href="index.php?view_customers">  <!--- ahref starts ---> <!--- CUSTOMERS ---> 
                    
                    <i class="fa fa-fw fa-users"></i> Customers
                    
                    <span class="badge"><?php echo $count_customers ?></span>
                     
                 </a>  <!--- ahref ends --->
                 
             </li>  <!--- li ends  --->
             
             <li>  <!--- li starts --->
                
                 <a href="index.php?view_cats">  <!--- ahref starts ---> <!--- PRODUCT CATEGORIES ---> 
                    
                    <i class="fa fa-fw fa-gear"></i> Product Categories
                    
                    <span class="badge"><?php echo $count_p_categories ?></span>
                     
                 </a>  <!--- ahref ends --->
                 
             </li>  <!--- li ends  --->
             
             <li class="divider"></li>
             
             <li>  <!--- li starts --->
                
                 <a href="logout.php">  <!--- ahref starts ---> <!--- ADMIN LOGOUT ---> 
                    
                    <i class="fa fa-fw fa-power"></i> Log Out
                     
                 </a>  <!--- ahref ends --->
                 
             </li>  <!--- li ends  --->
              
          </ul> <!--- dropdown-menu ends --->
           
       </li> <!--- li dropdown ends --->
        
    </ul> <!--- nav navbar-right top-nav ends --->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"> <!--- collapse navbar-collapse navbar-ex1-collapse starts --->
       
        <ul class="nav navbar-nav side-nav"> <!--- nav navbar-nav side-nav starts --->
           
            <li> <!--- li starts --->
               
                 <a href="index.php?dashboard">  <!--- ahref starts ---> <!--- DASHBOARD ---> 
                    
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                     
                 </a>  <!--- ahref ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                 <a href="#" data-toggle="collapse" data-target="#products">  <!--- ahref starts ---> <!--- PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i>
                     
                 </a>  <!--- ahref ends --->
                 
                 <ul id="products" class="collapse"> <!--- ul products start --->
                    
                     <li> <!--- li starts --->
                        
                         <a href="index.php?insert_product"> Insert Product </a>
                         
                     </li>
                        
                     <li>
                         
                         <a href="index.php?view_products"> View Products </a>
                         
                     </li> <!--- li ends --->
                    
                 </ul> <!--- ul products ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                 <a href="#" data-toggle="collapse" data-target="#p_cat">  <!--- ahref starts ---> <!--- PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i>
                     
                 </a>  <!--- ahref ends --->
                 
                 <ul id="p_cat" class="collapse"> <!--- ul products start --->
                    
                     <li> <!--- li starts --->
                        
                         <a href="index.php?insert_p_cat"> Insert Product Category </a>
                         
                     </li>
                        
                     <li>
                         
                         <a href="index.php?view_p_cats"> View Products Categories </a>
                         
                    </li> <!--- li ends --->
                    
                 </ul> <!--- ul products ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                 <a href="#" data-toggle="collapse" data-target="#cat">  <!--- ahref starts ---> <!--- PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-book"></i> Categories
                    <i class="fa fa-fw fa-caret-down"></i>
                     
                 </a>  <!--- ahref ends --->
                 
                 <ul id="cat" class="collapse"> <!--- ul products start --->
                    
                     <li> <!--- li starts --->
                        
                         <a href="index.php?insert_cat"> Insert Category </a>
                     </li>
                     
                     <li>
                         
                         <a href="index.php?view_cats"> View Categories </a>
                         
                    </li> <!--- li ends --->
                    
                 </ul> <!--- ul products ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                 <a href="#" data-toggle="collapse" data-target="#slides">  <!--- ahref starts ---> <!--- PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i>
                     
                 </a>  <!--- ahref ends --->
                 
                 <ul id="slides" class="collapse"> <!--- ul products start --->
                    
                     <li> <!--- li starts --->
                        
                         <a href="index.php?insert_slide"> Insert Slide </a>
                         
                     </li>
                        
                     <li>
                         
                         <a href="index.php?view_slides"> View Slides </a>
                         
                    </li> <!--- li ends --->
                    
                 </ul> <!--- ul products ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                <a href="index.php?view_customers"> <!--- ahref starts --->
                   
                    <i class="fa fa-fw fa-users"></i> View Customers
                    
                </a> <!--- ahref ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                <a href="index.php?view_orders"> <!--- ahref starts --->
                   
                    <i class="fa fa-fw fa-book"></i> View Orders
                    
                </a> <!--- ahref ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                <a href="index.php?view_payments"> <!--- ahref starts --->
                   
                    <i class="fa fa-fw fa-money"></i> View Payments
                    
                </a> <!--- ahref ends --->
                
            </li> <!--- li ends --->
            
            <li> <!--- li starts --->
               
                 <a href="#" data-toggle="collapse" data-target="#users">  <!--- ahref starts ---> <!--- PRODUCTS ---> 
                    
                    <i class="fa fa-fw fa-users"></i> Users
                    <i class="fa fa-fw fa-caret-down"></i>
                     
                 </a>  <!--- ahref ends --->
                 
                 <ul id="users" class="collapse"> <!--- ul products start --->
                    
                     <li> <!--- li starts --->
                        
                         <a href="index.php?insert_users"> <strike>Insert User</strike> </a>
                         
                     </li>
                        
                     <li>
                         
                         <a href="index.php?view_users"> View Users </a>
                         
                    </li> <!--- li ends --->
                    
                    <li>
                         
                         <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User </a>
                         
                    </li> <!--- li ends --->
                    
                 </ul> <!--- ul products ends --->
                
            </li> <!--- li ends --->
                        
            <li> <!--- li starts --->
               
                <a href="logout.php"> <!--- ahref starts --->
                   
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                    
                </a> <!--- ahref ends --->
                
            </li> <!--- li ends --->
            
        </ul> <!--- nav navbar-nav side-nav ends --->
        
    </div> <!--- collapse navbar-collapse navbar-ex1-collapse ends --->
    
</nav> <!--- navbar navbar-inverse navbar-fixed-top ends --->


<?php } ?>