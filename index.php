<?php

 require 'header.php';
 
  require 'login.php';
  
$x=1;



?>
<?php
 if(isset($_GET['empty'])){
                           
    $sql4 = "DELETE FROM tbl_side_cart";
    
    mysqli_query($conn, $sql4);
 }
    ?>



<main>
<div class="click-out" onclick="searchout()">
            
            </div>
            <div class="search-bar" style="display: none;" >
                <input id="search-bar" type="text" placeholder="Search here" >
            </div>
           

          



            <div class="sign" >
<form method="post" action="./index.php">
<div class="sign-left">
     <h1>SIGN IN</h1>
     <h3>Email</h3>
     <input name="username" id="email" type="text" placeholder="admin:rezaan6 Customer:john23">
     <h3>Password</h3>
     <input name="password" id="password" type="text" placeholder="admin:1111 Customer:2222">
     <a href="#">Forgot Password?</a>    
     <button type="submit"  name = "login" >login</button>
     <button id="register">register</button>
 </div>

</form>


 <div class="sign-right">
    <img id="close" src="./images/icon/close.png" alt="" onclick="cancel()">
 </div>
</div>


<div class="backlock" onclick="poppout()">
</div>
<div class="profile">
 <div class="profile-top">
     <div class="profile-top-left">
       
     </div>
     <div class="profile-top-right">
     <h1><?php echo $a?></h1>

     <?php
     if ($b=="Admin"){
      ?>  <h2 style="border: 1px solid green; color:green;"><?php echo $b?></h2> <?php
     }

     else{
      ?>  <h2><?php echo $b?></h2>  <?php
     }
     
     
     
     
     
     ?>
        
         <h3><img src="./images/icon/gender.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $c?></h3>
         <h4><img src="./images/icon/address.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $d?></h4>
     </div>
 </div>

 <form method="post" action="./index.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
 
</div>


        
<div class="slide">
            <div class="circle"></div>
          
            <img id="slidebox" src="./images/slide.box.png" alt="">
            <h1 id="spree">SPREE</h1>
            <h1 id="collection">COLLECTION</h1>

            <img src="./images/man.png" alt="">
        </div>
        <div class="show-option">
            <div class="men-collection">
                <h1>Men</h1>
                <a  href="./pages/men.html"> <button id="button">Shop Now</button></a>

            </div>
            <div class="women-collection">
                <a  href="./pages/women.html"> <button id="button">Shop Now</button></a>
                <h1>Women</h1>
            </div>
            <div class="accessories-collection">
                <h1>Accessories</h1>
                <a  href="./pages/men/accessories.html"> <button id="button">Shop Now &nbsp; M</button></a>
                <a  href="./pages/women/accessories.html"> <button id="button">Shop Now &nbsp; F</button></a>

            </div>
        </div>
        <div class="tab">
            <a href=""> <button class="tablinks" onclick="openCity(event, 'new-arrival')">New Arrival</button></a>
          
            
        </div>
        
        <?php 
































       $loop = 1;
       $sql = "SELECT * from tbl_product_details";
       mysqli_query($conn, $sql) or die('Error querying database.');
       $result = mysqli_query($conn, $sql);
?>
       <div class="t-container">
       <?php 

       while ($row = mysqli_fetch_array($result))
       { 

            $id = $row['p_id'];
            $name = $row['p_name'];
            $price = $row['p_price_dollar'];
            $colour= $row['p_colour'];
            $image = $row['p_image_src'];
            $category = $row['p_category'];
            $subcategory = $row['p_sub_category'];
            $likes = $row['p_likes'];
            $newarrivals = $row['p_new_arrivals'];
            
            $id = htmlspecialchars($row['p_id'],ENT_QUOTES);
            $name = htmlspecialchars($row['p_name'],ENT_QUOTES);
            $price = htmlspecialchars($row['p_price_dollar'],ENT_QUOTES);
            $colour = htmlspecialchars($row['p_colour'],ENT_QUOTES);
            $image = htmlspecialchars($row['p_image_src'],ENT_QUOTES);
            $category = htmlspecialchars($row['p_category'],ENT_QUOTES);
            $subcategory = htmlspecialchars($row['p_sub_category'],ENT_QUOTES);
            $likes = htmlspecialchars($row['p_likes'],ENT_QUOTES);
            $newarrivals = htmlspecialchars($row['p_new_arrivals'],ENT_QUOTES);
        


  ?>
    <?php if($newarrivals==1 && $loop<=8){
   ?>
   <?php    
                           $image= "./$image";
                        
                        ?>


  <div class="quick-view">
            <div class="qv-left-side">
                <img id="change------------1" src="<?php echo $image?>" alt="">
            </div>
            <div class="qv-right-side">
                <img id="cancel" src="./images/icon/cancel.png" alt="" onclick="quickviewclose()">
                <h1><?php echo $name?></h1>
        
                <h3 id="qv-price"><?php echo $price?></h3>
                <h5>COLOUR:</h5>
               
                <div class="colour-selection">
                    <button class="change------------1 me-----n men--formal-black" id="<?php echo $colour?>" onclick="formalshirt1(this.className)"></button>
                 
                   

                 
                </div>
                <div class="size-selection">
                    <h5>SIZE:</h5>
                    <button class="s" id="s" onclick="size(this.className)">41</button>
                    <button class="m" id="m" onclick="size(this.className)">42</button>
                    <button class="l" id="l" onclick="size(this.className)">43</button>
                    <button class="xl" id="xl" onclick="size(this.className)">44</button>
                </div>
                <h5>QUANTITY:</h5>

                <div class="quantity-selection">
                    <button onclick="minus()">-</button>
                    <h5 id="number">0</h5>
                    <button onclick="plus()">+</button>

                </div>
                <button id="addtocart">ADD CART</button>
               
            </div>
        </div>


        <div class="t-one" style="box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2);border: none">
        <div class="tab-option">
                    <div class="search" >
                        <img class="tab--jacket-black ta-----b" src="./images/icon/csearch.png" alt="" onclick="formalshirtqv(this.className)">

                        <h5>Quick View</h2>
                    </div>
                    <div class="cart text-center">

                    <form method="get" action="">
                   <input type="hidden" name="<?php echo$id;?>" value="<?php echo$id;?>">
                   <button id="cartbutton" "style="border: none; background: none;height: 45px;outline: none;" ><img id="ccart" src="./images/icon/ccart.png"  alt=""></button> 
                   
                 
                   
                        </form>


            

                        <?php
                       
                  
                      
                              
                        
           
  if(isset($_GET[$id])){
                           
    $sqll = "INSERT INTO tbl_side_cart(p_id, p_name, p_price_dollar, p_colour, p_image_src, p_category, p_sub_category, p_likes, p_new_arrivals) SELECT * from tbl_product_details WHERE p_id = '$id'";
    
    mysqli_query($conn, $sqll);

           
    $sql2 = "SELECT p_id from tbl_side_cart WHERE p_id = '$id'";
  
    $check = mysqli_query($conn, $sql2);
   
   
    if($sql2 != 0) {
    
 } 
    

 }
                        
                        
                        
                        
                      ?>



                        <h5 id="myCart" class="<?php echo "cart".$id;?>" >Add Cart</h2>
                    </div>
                    <div class="wishlist">
                        <img class="<?php echo $id;?>" id="<?php echo $id;?>" src="./images/icon/cwishlist.png" alt="like" onclick="changeImage1(this.className)" >
                        <h5><?php echo $likes?></h2>
                    </div> 
                </div>
                <img  id="onedefault----index" src="<?php echo $image?>">
                <div class="color">
                    <button class="onedefault---formal me-----n men--formal-black" id="<?php echo $colour?>"></button>
                </div>
                <h4  id="one-name"><?php echo $name?></h4>              
                <h4  id="price">$<?php echo $price?></h4>
              

        </div> 
        <?php
$loop++; 
}
}
?>
    </div>


<div class="all-product">
            <a href=""><button>ALL PRODUCTS</button></a>
        </div>

        <div class="spring-collection">
            <h1>AUTUMN COLLECTION</h1>
            <a href=""><button>SHOP NOW</button></a>
        </div>
        <div class="instagram">
            <div class="details">
                <img src="./images/social/instagram.png" alt="">
                <h1>Instagram Shop</h1>
                <h4>Shop the latest fashion and discover new fashion clothing.</h4>
            </div>
            <div class="instagram-collection">
                <div class="insta-1">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-2">
                        <div class="insta-logo">
                            <img src="./images/social/instagram-white.png" alt="">
                            <h5>SHOP IT</h5>
                        </div>
                </div>
                <div class="insta-3">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-4">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-5">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-6">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-7">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
                <div class="insta-8">
                    <div class="insta-logo">
                        <img src="./images/social/instagram-white.png" alt="">
                        <h5>SHOP IT</h5>
                    </div>
                </div>
            </div>
        </div>




        <div class="cartbox_back" onclick = "cartboxout()" ></div>
<div class="cartbox" >
    <h1>SHOPPING CART</h1>
   
    <div class="cartlist">

   <?php 
   
   
   require 'side-cart.php'; 
   
   
   ?>
     
       
       
       
    </div>
    <div class="cartbox-total" >
        <h4>TOTAL:</h4>
        <h3 id="cartboxamount">$<?php echo $total ?></h3>
    </div>
    <div class="cartbox-footer">
        <form method="get" action="./index.php">


        <button id="checkout-cartbox" >EMPTY CART 
       
        </button>
        <input type="hidden" name="empty">
        </form>
        
        <button onclick="location.href='./pages/cart.php';">CHECKOUT</button>
    </div>
</div>
</div>

</main>



<?php
    require "footer.php";
?>

