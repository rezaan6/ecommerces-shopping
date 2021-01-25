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
    <form method="post" action="../../pages/men/top.php">
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

 <form method="post" action="../../pages/men/top.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
            <div class="top-option">
             <div class="top-heading">
                 <img id="top-heading" src="../../images/me-----n/shit.png" alt="" onclick="location.href='../../pages/men/top.php';" >
                 
                 <h5>TOP WEAR</h5>
            
               
             </div>
             <div class="top-formal-shirt" onclick="location.href='../../pages/men/top/formal-shirt.php';">
                <img id="top-formal-shirt" src="../../images/me-----n/formal-shirt-qv-1.png" alt="">
                <h5>Formal Shirt</h5>
                
    
             </div>
             <div class="top-casual-shirt" onclick="location.href='../../pages/men/top/casual-shirt.php';">
                 <img id="top-casual-shirt" src="../../images/me-----n/casual-shirt-qv-1.png" alt="">
                <h5>Casual Shirt</h5>
    
             </div>
             <div class="top-t-shirt" onclick="location.href='../../pages/men/top/t-shirt.php';">
                <img id="top-t-shirt" src="../../images/me-----n/t-shirt.png" alt="">
                <h5>T-Shirt</h5>
    
             </div>
             <div class="top-jacket" onclick="location.href='../../pages/men/top/jacket.php';">
                <img id="top-jacket" src="../../images/me-----n/jacket.png" alt="">
                <h5>Jacket</h5>
    
             </div>
             <div class="top-coat" onclick="location.href='../../pages/men/top/coat.php';">
                <img id="top-coat" src="../../images/me-----n/coat.png" alt="">
                <h5>Coat</h5>
    
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


