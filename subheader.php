<?php
    session_start();

    require '../../../login.php'; 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/stylus.css">
    
    <title>Document</title>
</head>
<body>

<header>
        <div class="logo-container">
            <img src="../../../images/logo.png" alt="logo" " onclick="location.href='../../../index.php';" >
        </div>
        
        <nav>
            <ul class="nav-links">
                <li><a href="../../../index.php">HOME</a></li>
                <li class="men"><a  href="../../../pages/men.php">MEN</a>
                    <div class="dropmenu">
                        <ul class="drop-menu-men">
                         <li id="top-bar-m" onclick="location.href='../../../pages/men/top.php';">
                                <img src="../../../images/icon/topm.png" alt="" style="width: 60px; padding: 10px; cursor: default;">
                                <div class="top-m">
                                    <a id="top-m">TOP</a>
                                    <h5>Formal Shirt, Casual Shirt, T-Shirt, Jacket, Coat</h5>
                                </div>
                               
                                
                            </li>
                      
                            <li id="bottom-bar-m" onclick="location.href='../../../pages/men/bottom.php';">
                                <img src="../../../images/icon/bottomm.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="bottom-m">
                                    <a id="bottom-m">BOTTOM</a>
                                    <h5>Jean, Sweatpant, Trouser, Short</h5>
                                </div>
                            </li>
                            <li id="accessories-bar-m" onclick="location.href='../../../pages/men/accessories.php';">
                                <img src="../../../images/icon/accessorym.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="accessories-m">
                                    <a id="accessories-m">ACCESSORIES</a>
                                    <h5>Cap, Sunglass, Wallet, Watch, Belt</h5>
                                </div>
                            </li>
                            <li id="footwear-bar-m" onclick="location.href='../../../pages/men/footwear.php';">
                                <img src="../../../images/icon/footwearm.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="footwear-m">
                                    <a id="footwear-m">FOOTWEAR</a>
                                    <h5>Formal Shoe, Sneaker, Scandal, Socks</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="women"><a  href="../../../pages/women.php">WOMEN</a>
                    <div class="dropmenu">
                        <ul class="drop-menu-women">
                            <li id="top-bar-w" onclick="location.href='../../../pages/women/top.php';">
                                <img src="../../../images/icon/topw.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="top-w">
                                    <a id="top-w" >TOP</a>
                                    <h5>Shirt, T-Shirt, Jacket, Coat </h5>
                                </div>
                               
                                
                            </li>
                            <li id="bottom-bar-w" onclick="location.href='../../../pages/women/bottom.php';">
                                <img src="../../../images/icon/bottomw.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="bottom-w">
                                    <a id="bottom-w" >BOTTOM</a>
                                    <h5>Jean, Sweatpant, Trouser, Skirt</h5>
                                </div>
                            </li>
                            <li id="accessories-bar-w" onclick="location.href='../../../pages/women/accessories.php';">
                                <img src="../../../images/icon/accessoryw.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="accessories-w">
                                    <a id="accessories-w" >ACCESSORIES</a>
                                    <h5>Cap, Sunglass, Handbag, Watch, Belt</h5>
                                </div>
                            </li>
                            <li id="footwear-bar-w" onclick="location.href='../../../pages/women/footwear.php';">
                                <img src="../../../images/icon/footwearw.png" alt="" style="width: 60px; padding: 10px;">
                                <div class="footwear-w">
                                    <a id="footwear-w" >FOOTWEAR</a>
                                    <h5>High Heel, Sneaker, Scandal, Socks</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            
                <li><a href="../../../pages/about.php">ABOUT</a></li>

            </ul>
            
        </nav>

      
        <?php 
               
    
               if($b == "Admin"){ 
                   
                   ?>
        <div class="option-container" >
        <a href="../../../admin.php">DASHBOARD</a>
              
            </div>
            <?php
        
    }

    else{   
        
        ?>
            <div class="option-container" style=opacity:0;cursor:default;>
     
              
            </div>
            <?php

}

           
?>
        
            <div class="header-option">
                <img id="search" src="../../../images/icon/search.png" alt="" onclick="search()">



    <?php 
               
    
    if($b == "Admin" || $b== "User"){ 
        
        ?>
  <img id="user" src="../../../images/icon/user.png" alt="" onclick="popp()">
  
  <?php
        
    }

    else{   
        
        ?>
        <img id="user" src="../../../images/icon/user.png" alt="" onclick="pop()"> 
        <?php

    }

               
?>
             


                <img id="cart" src="../../../images/icon/cart.png" alt="" onclick="cartbox()">
            </div>


        </div>
    </header>
    
    
</body>

</html> 

