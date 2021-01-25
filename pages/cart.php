<?php
 
  require "../semi_header.php";
  $total=0;
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
    <form method="post" action=" ../pages/cart.php">
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

 <form method="post" action="../pages/cart.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
   <div class="cart-container">
       <div class="cart-cont-left">
          
                <div class="cart-name">
                    <h1>SHOPPING CART</h1>
                </div> 

                  <div class="cart-contlist">
<?php


$sql3 = "SELECT * from tbl_side_cart";

$result3 = mysqli_query($conn, $sql3);


while ($row3 = mysqli_fetch_array($result3)){
    $cid = $row3['p_id'];
    $cname = $row3['p_name'];
    $cprice = $row3['p_price_dollar'];
    $ccolour= $row3['p_colour'];
    $cimage = $row3['p_image_src'];
    $ccategory = $row3['p_category'];
    $csubcategory = $row3['p_sub_category'];
    $clikes = $row3['p_likes'];
    $cnewarrivals = $row3['p_new_arrivals'];
    
    $cid = htmlspecialchars($row3['p_id'],ENT_QUOTES);
    $cname = htmlspecialchars($row3['p_name'],ENT_QUOTES);
    $cprice = htmlspecialchars($row3['p_price_dollar'],ENT_QUOTES);
    $ccolour = htmlspecialchars($row3['p_colour'],ENT_QUOTES);
    $cimage = htmlspecialchars($row3['p_image_src'],ENT_QUOTES);
    $ccategory = htmlspecialchars($row3['p_category'],ENT_QUOTES);
    $csubcategory = htmlspecialchars($row3['p_sub_category'],ENT_QUOTES);
    $clikes = htmlspecialchars($row3['p_likes'],ENT_QUOTES);
    $cnewarrivals = htmlspecialchars($row3['p_new_arrivals'],ENT_QUOTES);


    $total= $total + $cprice;
?>
     <?php    
                          $cimage= "../$cimage";
                        
                        ?>
                   
                       <div id="<?php echo$cid;?>" class="cart-cont-single">
                        <div class="ccs-image">
                        <img src="<?php echo$cimage;?>" alt="">
                     
                    
                    </div>

                        <div class="ccs-name" >
                            <h4><?php echo$cname;?></h4>
                        </div>

                        <div class="ccs-quantity">
                            <button>-</button>
                            <h5>500</h5>
                            <button>+</button>
                        </div>
                        <div class="ccs-price">
                            <h5><?php echo$cprice;?>/each</h5>
                        </div>

                        <div class="ccs-remove">
                            <button id="ccs-remove"></button>
                        </div>
                        </div>
                        
            
              
<?php
}
?>
           
           </div>
       </div>
       <div class="cart-cont-right">
           <div class="bar">

           </div>

           <div class="text-total">
               <div class="tt-left">
                    <h5>CART TOTAL:</h5>
                  
               </div>
               <div class="tt-right">
                    <h1>$<?php echo$total;?></h1>
               </div>
           </div>

           <div class="condition">
                <h5>This includes Shipping and Taxes.</h5>
           </div>
           <div class="button">
               <button>CHECKOUT</button>
               
               <button id="paypal"></button>
           </div>

       </div>
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

