<?php
  
 require '../../../subheader.php';

    
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
           
        
            <?php require '../../../login.php'; ?>
    
    
    
            <div class="sign" >
    <form method="post" action="../../../pages/women/bottom/jean.php">
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
        <img id="close" src="../../../images/icon/close.png" alt="" onclick="cancel()">
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
        
         <h3><img src="../../../images/icon/gender.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $c?></h3>
         <h4><img src="../../../images/icon/address.png" alt="" style="width:auto; height:20px; margin-bottom:-1vh; margin-right:1vh; "><?php echo $d?></h4>
     </div>
 </div>

 <form method="post" action="../../../pages/women/bottom/jean.php">

 <div class="profile-bottom">
     <button id="edit-profile">EDIT PROFILE</button>
     <button type="submit" name="logout" id="prof-logout" >LOGOUT</button>


 </div>
 </form>
</div>
<div class="filter">
         <div class="colour">
             <h3>COLOUR</h3>
             <div class="section">
                <button class="c-black" id="c-black" onclick="select(this.className)"></button>
                <button class="c-white" id="c-white" onclick="select(this.className)"></button>
                <button class="c-red" id="c-red" onclick="select(this.className)"></button>
                <button class="c-purple" id="c-purple" onclick="select(this.className)"></button>
               

             </div>
             <div class="section-2">
                <button class="c-blue" id="c-blue" onclick="select(this.className)"></button>
                <button class="c-green" id="c-green" onclick="select(this.className)"></button>
                <button class="c-yellow" id="c-yellow" onclick="select(this.className)"></button>
             </div>
            
            


         </div>
         <div class="size">
             <h3>SIZE</h3>
             <div class="size-section">
                 <img class="small" id="small"  src="../../../images/size/small-b.png" alt="" onclick="sizefilter(this.className)">
                 <img class="medium" id="medium" src="../../../images/size/medium-b.png" alt="" onclick="sizefilter(this.className)">
                 <img class="large" id="large"  src="../../../images/size/large-b.png" alt="" onclick="sizefilter(this.className)">

             </div>
             <div class="size-section-2">
                <img class="xlarge" id="xlarge" src="../../../images/size/xlarge-b.png" alt="" onclick="sizefilter(this.className)">
                <img class="xxlarge" id="xxlarge" src="../../../images/size/xxlarge-b.png" alt="" onclick="sizefilter(this.className)">
                <img class="xxxlarge" id="xxxlarge"  src="../../../images/size/xxxlarge-b.png" alt="" onclick="sizefilter(this.className)">
             </div>
         </div>
         <div class="price">
             <h3>PRIZE</h3>
             <p>
                <label for="amount" style="font-family: PopRegular; font-size: 20px;"></label>
                <input type="text" id="amount" readonly style="border:0; color:#2e2e2e; font-weight:bold; ">
              </p>
               
              <div id="slider-range"></div>
         </div>
         
         <div class="sort">
             <h3>FILTER by</h3>
             <div class="filter">
                <button id="apply">APPLY</button>
                <button id="apply">RESET</button>
             </div>
           

         </div>
        </div>
<div class="tab">
            <a href=""> <button class="tablinks" onclick="openCity(event, 'new-arrival')">Jeans</button></a>
          
            
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
            
            $id = htmlspecialchars($row['p_id'],ENT_QUOTES);
            $name = htmlspecialchars($row['p_name'],ENT_QUOTES);
            $price = htmlspecialchars($row['p_price_dollar'],ENT_QUOTES);
            $colour = htmlspecialchars($row['p_colour'],ENT_QUOTES);
            $image = htmlspecialchars($row['p_image_src'],ENT_QUOTES);
            $category = htmlspecialchars($row['p_category'],ENT_QUOTES);
            $subcategory = htmlspecialchars($row['p_sub_category'],ENT_QUOTES);
            $likes = htmlspecialchars($row['p_likes'],ENT_QUOTES);
        


  ?>
    <?php if($category==2 && $loop<=8 && $subcategory==25){
   ?>
   <?php    
                           $image= "../../../$image";
                        
                        ?>
    <div class="quick-view">
            <div class="qv-left-side">
                <img id="change------------1" src="<?php echo $image?>" alt="">
            </div>
            <div class="qv-right-side">
                <img id="cancel" src="../../../images/icon/cancel.png" alt="" onclick="quickviewclose()">
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
                        <img class="tab--jacket-black ta-----b" src="../../../images/icon/csearch.png" alt="">

                        <h5>Quick View</h2>
                    </div>
                    <div class="cart text-center">

                    <form method="get" action="">
                   <input type="hidden" name="<?php echo$id;?>" value="<?php echo$id;?>">
                   <button id="cartbutton" "style="border: none; background: none;height: 45px;outline: none;" ><img id="ccart" src="../../../images/icon/ccart.png"  alt=""></button> 
                   
                 
                   
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
                        <h5 id="myCart">Add Cart</h2>
                    </div>
                    <div class="wishlist">
                        <img class="<?php echo $id;?>" id="<?php echo $id;?>" src="../../../images/icon/cwishlist.png" alt="like" onclick="changeImage(this.className)" >
                        <h5><?php echo $likes?></h2>
                    </div> 
                </div>
                <img id="onedefault----index" src="<?php echo $image?>">
                <div class="color">
                    <button class="onedefault---formal me-----n men--formal-black" id="<?php echo $colour?>"></button>
                </div>
                <h4 id="one-name"><?php echo $name?></h4>              
                <h4 id="price"><?php echo $price?></h4>
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

      
 
    


        <div class="cartbox_back" onclick="cartboxout()">  </div>
<div class="cartbox" >
    <h1>SHOPPING CART</h1>
   
    <div class="cartlist">

   <?php 
   
   
   require '../../../subside-cart.php'; 
   
   
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
        
        <button onclick="location.href='../../../pages/cart.php';">CHECKOUT</button>
    </div>
</div>

</main>
   

<?php
    require "../../../subfooter.php";
?>