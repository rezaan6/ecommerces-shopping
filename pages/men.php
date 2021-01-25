
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
<form method="post" action=" ../pages/men.php">
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

 <form method="post" action="../pages/men.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>



        <div class="men-option" style="height:750px;">
          <div class="men-top">
              <img id="men-top" src="../images/top.jpg" alt="">
             <a href="../pages/men/top.php" style="text-decoration: none;"><h2 id="h2-top">TOP</h2></a> 
           <h3>Formal Shirt, Casual Shirt, T-Shirt, Jacket, Coat</h3>
          </div>
          <div class="men-bottom">
            <img id="men-bottom" src="../images/bottom.jpg" alt="">

            <a href="../pages/men/bottom.php" style="text-decoration: none;"><h2>BOTTOM</h2></a>

            <h3>Jean, Sweatpant, Trouser, Short</h3>
          

          </div>
          <div class="men-accessories">
            <img id="men-accessories" src="../images/accessoriies.jpg" alt="">

            <a href="../pages/men/accessories.php" style="text-decoration: none;"><h2>ACCESSORIES</h2></a>

            <h3>Cap, Sunglass, Wallet, Watch, Belt</h3>
         

          </div>
          <div class="men-footwear">
            <img id="men-footwear" src="../images/footwear.jpg" alt="">

            <a href="../pages/men/footwear.php" style="text-decoration: none;"><h2>FOOTWEAR</h2></a>

            <h3>Formal Shoe, Sneaker, Scandal, Sock</h3>
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

