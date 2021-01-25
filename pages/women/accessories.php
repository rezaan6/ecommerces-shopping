<?php
  
 require '../../semi_subheader.php';
 
    
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
           
        
            <?php require '../../login.php'; ?>
    
    
    
            <div class="sign" >
    <form method="post" action="../../pages/women/accessories.php">
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
        <img id="close" src="../../images/icon/close.png" alt="" onclick="cancel()">
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
        
         <h3><img src="../../images/icon/gender.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $c?></h3>
         <h4><img src="../../images/icon/address.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $d?></h4>
     </div>
 </div>

 <form method="post" action="../../pages/women/accessories.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
        <div class="accessories-option-w">
        <div class="accessories-heading-w" onclick="location.href='../../pages/women/accessories.php';" >
          
             
            <h5>ACCESSORIES</h5>
       
          
        </div>
         <div class="accessories-cap-w" onclick="location.href='../../pages/women/accessories/cap.php';">
            <img id="accessories-cap-w" src="../../images/wome---n/cap.png" alt="">
            <h5>cap</h5>
            

         </div>
       <div class="accessories-sunglass-w" onclick="location.href='../../pages/women/accessories/sunglass.php';">
        <img id="accessories-sunglass-w" src="../../images/wome---n/sunglass.png" alt="">
       <h5>sunglasses</h5>

         </div>
         <div class="accessories-handbag-w" onclick="location.href='../../pages/women/accessories/handbag.php';">
            <img id="accessories-handbag-w" src="../../images/wome---n/handbag.png" alt="">
            <h5>handbag</h5>

         </div>
         <div class="accessories-watch-w" onclick="location.href='../../pages/women/accessories/watch.php';">
            <img id="accessories-watch-w" src="../../images/wome---n/watch.png" alt="">
            <h5>watches</h5>

         </div>
         <div class="accessories-belt-w" onclick="location.href='../../pages/women/accessories/belt.php';">
            <img id="accessories-belt-w" src="../../images/wome---n/belt.png" alt="">
            <h5>belts</h5>

         </div>
        
          
        </div>

     

       
       
           
    
        
        <div class="cartbox_back" onclick="cartboxout()">  </div>
<div class="cartbox" >
<h1>SHOPPING CART</h1>

<div class="cartlist">

<?php 


require '../../semi_subside-cart.php'; 

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

<button onclick="location.href='../../pages/cart.php';">CHECKOUT</button>
</div>
</main>
    
    <?php
    require '../../semi_subfooter.php';
?>


            