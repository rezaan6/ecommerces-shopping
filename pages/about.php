
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
    <form method="post" action=" ../pages/about.php">
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

 <form method="post" action="../pages/about.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
        <div class="about-option">
        <div class="about-heading"  >
          
             
            <h5>TROPICAL CODE</h5>
            <h6>Since 1995</h6>
       
          
        </div>
        <div class="content">
            <h5>About us</h5>
            <p>Tropical Code is a fast growing company in Sri Lanka, where we mainly forcus on selling imported garment items that include from top wear, bottom wear to accessories. Since 1995 to the present we have upto 7 branches available all over the country.</p>
            <p id="p">Our Vision is to provide trendy high-quality outfits at the best reasonable price in the market and create an extraordinary experience to consumers as well as our vendors. </p>
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

