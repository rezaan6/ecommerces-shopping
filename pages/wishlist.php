
<?php
  
  require '../semi_header.php';
  
     
 ?>

<?php 
            
            
            if(isset($_GET["empty"])) {

            
                $sql4 = "DELETE FROM tbl_side_cart";

                $result4 = mysqli_query($conn, $sql4);

            

            }
            
            
                 
            
            
            
            
            
            
            
            ?>
 <main>
    <div class="click-out" onclick="searchout()">
            
            </div>
            <div class="search-bar" style="display: none;" >
                <input id="search-bar" type="text" placeholder="Search here" >
            </div>
           
        
            <?php require '../login.php'; ?>
    
    
    
            <div class="sign" >
    <form method="post" action=" ../pages/wishlist.php">
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
        <img id="close" src="../images/icon/close.png" alt="" onclick="cancel()">
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
        
         <h3><img src="../images/icon/gender.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $c?></h3>
         <h4><img src="../images/icon/address.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $d?></h4>
     </div>
 </div>

 <form method="post" action="../pages/wishlist.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
        <div class="top-option-w" id="check">
        <div class="top-heading-w" onclick="location.href='../pages/wishlist.php';" id="top-heading">
          
             
            <h5 style="color: black;">WISHLIST</h5>
            <h5 style="font-size: 20px; margin-top: -20vh;">(4 ITEMS)</h5>
       
          
        </div>
        
        <?php

$sql7 = "SELECT * from tbl_side_cart";

$result7 = mysqli_query($conn, $sql7);


while ($row3 = mysqli_fetch_array($result7)){
    $id = $row3['p_id'];

    
    $id = htmlspecialchars($row3['p_id'],ENT_QUOTES);



    $total= $total + $cprice;
?>
     <?php    
                          $cimage= "../$cimage";
                        
                        ?>
                        <div class="wish" style="height:auto; width:100%;">
                        <div class="quick-view" id="quickview">
            <div class="qv-left-side">
                <img id="change" src="../images/me-----n/casual-shirt-qv-1.png" alt="">
            </div>
            <div class="qv-right-side">
                <h1>Formal Shirt SlimFit</h1>
                <h4>Brand:</h4>
                <h2>DENIM</h2>
              
                <div class="ratings">
                    <span class="heading">User Rating</span>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>                
                    
                    <p id="review">4.1 average based on 254 reviews.</p>
                    
                   
                    
                </div>
                <h3 id="qv-price">$25.99</h3>
                <h5>COLOUR:</h5>
               
                <div class="colour-selection">
                    <button id="white" onclick="formalshirt1qv()"></button>
                    <button id="darkblue" onclick="formalshirt2qv()"></button>
                    <button id="red" onclick="formalshirt3qv()"></button>
                    <button id="blue" onclick="formalshirt4qv()"></button>
                </div>
                <div class="size-selection">
                    <h5>SIZE:</h5>
                    <button class="s" id="s" onclick="size(this.className)">S</button>
                    <button class="m" id="m" onclick="size(this.className)">M</button>
                    <button class="l" id="l" onclick="size(this.className)">L</button>
                    <button class="xl" id="xl" onclick="size(this.className)">XL</button>
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
     
                        </div>
     
        <?php
}
?>
        </div>

     

       

    



  
    </div>
      

       <div class="check" style="width:100%; height:500px; ">
       <?php


$sql7 = "SELECT * from tbl_side_cart";

$result7 = mysqli_query($conn, $sql7);


while ($row7 = mysqli_fetch_array($result7)){
    $id = $row7['p_id'];

    
    $id = htmlspecialchars($row7['p_id'],ENT_QUOTES);



    $total= $total + $cprice;
?>
     <?php    
                          $cimage= "../$cimage";
                         echo "SFFDFSFDFD"; 
                        ?>
                        <div class="wish" style="height:auto; width:100%;">
                        <div class="quick-view" id="quickview">
            <div class="qv-left-side">
                <img id="change" src="../images/me-----n/casual-shirt-qv-1.png" alt="">
            </div>
            <div class="qv-right-side">
                <h1>Formal Shirt SlimFit</h1>
                <h4>Brand:</h4>
                <h2>DENIM</h2>
              
                <div class="ratings">
                    <span class="heading">User Rating</span>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>                
                    
                    <p id="review">4.1 average based on 254 reviews.</p>
                    
                   
                    
                </div>
                <h3 id="qv-price">$25.99</h3>
                <h5>COLOUR:</h5>
               
                <div class="colour-selection">
                    <button id="white" onclick="formalshirt1qv()"></button>
                    <button id="darkblue" onclick="formalshirt2qv()"></button>
                    <button id="red" onclick="formalshirt3qv()"></button>
                    <button id="blue" onclick="formalshirt4qv()"></button>
                </div>
                <div class="size-selection">
                    <h5>SIZE:</h5>
                    <button class="s" id="s" onclick="size(this.className)">S</button>
                    <button class="m" id="m" onclick="size(this.className)">M</button>
                    <button class="l" id="l" onclick="size(this.className)">L</button>
                    <button class="xl" id="xl" onclick="size(this.className)">XL</button>
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
     
                        </div>
     
        <?php
}
    
?>
       </div>


    <div class="cartbox_back" onclick="cartboxout()">  </div>
<div class="cartbox" >
    <h1>SHOPPING CART</h1>
   
    <div class="cartlist">

   <?php 
   
   
   require '../semi_side-cart.php'; 
   
   
   ?>
     
       
       
       
    </div>
    <div class="cartbox-total">
        <h4>TOTAL:</h4>
        <h3 id="cartboxamount">$<?php echo $total ?></h3>
    </div>
    <div class="cartbox-footer">
        <form method="get" action="">


        <button id="checkout-cartbox" onclick = "delete()">EMPTY CART 
        <input type="hidden" name="empty">
        </button>
     
        </form>
        
        <button onclick="location.href='../pages/cart.php';">CHECKOUT</button>
    </div>
</div>

</main>
   

<?php
    require "../semi_footer.php";
?>

