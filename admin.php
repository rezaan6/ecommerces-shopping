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

    
       <div class="panel">
       <div class="adminout" onclick="adminout()">
</div> 
<div class="adminoutc" onclick="adminoutc()">
</div>
           <div class="panel-1">

            <div class="panel-1-top">
                <h1>Sales Progress</h1>
            </div>

            <div class="panel-1-bottom">
                <div class="left">
                    <h2>Average Sales</h2>
                    <h1>$332</h1>

                    <h2>Annual Taxes</h2>
                    <h1>$33,22</h1>

                </div>
                <div class="right">
                <h2>Commision</h2>
                <h1>$234,300</h1>

                <h2>Annual Income</h2>
                    <h1>$1,200,450</h1>


                </div>
            </div>




</div>
<div class="panel-2">
    <div class="panel-2-top">
    <div class="top-left">
        <img src="./images/icon/userc.png" alt="">
        <h1>83</h1>
        <h2>New Customers</h2>
    </div>
    <div class="top-right">
        <div class="user">
            <div class="user-left">
                <img src="./images/icon/admin.png" alt="">
            <h3>Admin</h3>
            <img id="three" src="./images/icon/three.png" alt="" onclick="admin()">

            
            </div>
            
            <div class="admin-drop" id="admin-drop">
                <h1>OPTIONS:</h1>
                <h2 onclick="addadmin()"><img src="./images/icon/plus.png" alt=""> ADD</h2>
                <h2 onclick="removeadmin()"><img src="./images/icon/minus.png" alt="">REMOVE</h2>
                <h2 onclick="updateadmin()"><img src="./images/icon/update.png" alt="">UPDATE</h2>
                <h2 onclick="openadminlist()"><img src="./images/icon/view.webp" alt="">  VIEW ALL</h2>
            </div>


            <div class="user-right">
            <img src="./images/icon/customer.png" alt="">
                <h3>User</h3>
                <img id="three" src="./images/icon/three.png" alt="" onclick="adminc()">
                
            </div>
            <div class="admin-drop-c" id="admin-drop">
                <h1>OPTIONS:</h1>
                <h2 onclick="adduser()"><img src="./images/icon/plus.png" alt=""> ADD</h2>
                <h2 onclick="removeuser()"><img src="./images/icon/minus.png" alt="">REMOVE</h2>
                <h2 onclick="updateuser()"><img src="./images/icon/update.png" alt="">UPDATE</h2>
                <h2 onclick="openuserlist()"><img src="./images/icon/view.webp" alt="">  VIEW ALL</h2>
            </div>
        </div>

                    <div class="product">
                        <div class="product-top">
                            <h3>ITEMS:</h3>
                        </div>

                        <div class="product-bottom">
                            <h3 onclick="additem()">Add</h3>
                            <h3 onclick="removeitem()">Remove</h3>
                            <h3 onclick="updateitem()">Update</h3>
                            <h3 onclick="openitem()">View All</h3>

                        </div>
                    </div>
    

                </div>
               </div>
               <div class="panel-2-bottom">
                    <div class="bottom-left">
                        <div class="bottom-left-top">
                            <h3>New Arrivals</h3>
                            <div class="tbl-new">
                                <h3>Name</h3>
                                <h2>Price</h2>
                                <h4>Colour</h4>
                                <h1>Likes</h1>


                            </div>
                        </div>




                        <?php 


       $loop = 1;
       $sql = "SELECT * from tbl_product_details";
       mysqli_query($conn, $sql) or die('Error querying database.');
       $result = mysqli_query($conn, $sql);
?>
          <div class="bottom-left-bottom">
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

                   







                <div class="list-new">
                        <div class="box-one">
                        <h1 id="box-h1"><?php echo $name?></h1>
                        </div>
                        <div class="box-two">
                        <h1 id="box-h1">$<?php echo $price?></h1>
                        </div>
                        <div class="box-three">
                        <h1 id="box-h1" style="text-transform: uppercase;"><?php echo $colour?></h1>
                        </div>
                        <div class="box-four">
                        <h1 id="box-h1"><?php echo $likes?></h1>
                        </div>
                </div>

                            <?php

}
}
?>
                            
                        </div>
                    </div>
                    <div class="bottom-right">
                        <h1>Weekly Sales</h1>
                        <h1>Stats</h1>
                        <h5>833,944 Sales</h5>
                        <img src="./images/icon/sales.png" alt="">
                    </div>
               </div>
           </div>
       



           <div class="add-admin" id="addpaneladmin">
               <h1>ADD ADMIN <img src="./images/icon/cancel.png" alt="" onclick="adminnclose()"></h1>

               <form method="post" action="">

               <div class="add-one">
                <h2>Full Name :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                <div class="add-one">
                <h2>Username :</h2>
               <input  name="ausername" id="ausername" type="text" placeholder="Enter Username">
                </div>

                <div class="add-one">
                <h2>Password :</h2>
               <input  name="apassword" id="apassword" type="text" placeholder="Enter Password">
                </div>

                <div class="add-one">
                <h2>Age :</h2>
               <input  name="aage" id="aage" type="text" placeholder="Enter Age">
                </div>

                <div class="add-one">
                <h2>Address :</h2>
               <input  name="aaddress" id="aaddress" type="text" placeholder="Enter Address">
                </div>

                <div class="add-one">
                <h2>Gender :</h2>
               <input  name="agender" id="agender" type="text" placeholder="Enter Gender">
                </div>

                <button type="submit" name="addadmin" id="add-admin">Submit</button>



               </form>
           


             
           </div>

           
           <div class="remove-admin" id="remmove-admin">
               <h1>REMOVE ADMIN <img id="adminremove" src="./images/icon/cancel.png" alt="" onclick="removeadminclose()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>Username :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Username">
                </div>

                

                <button type="submit" id="remove-admin">remove</button>



               </form>
             

             
           </div>





           <div class="remove-admin" id="updateadmin">
               <h1>UPDATE ADMIN <img id="updateadminclose" src="./images/icon/cancel.png" alt="" onclick="updateclose()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>NAME :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                

                <button type="submit" id="update-item">search</button>



               </form>
             

             
           </div>


           
           <div class="add-admin" id="addpaneluser">
               <h1>ADD USER <img src="./images/icon/cancel.png" alt="" onclick="usernclose()"></h1>

               <form method="get" action="">

               <div class="add-one">
                <h2>Full Name :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                <div class="add-one">
                <h2>Username :</h2>
               <input  name="ausername" id="ausername" type="text" placeholder="Enter Username">
                </div>

                <div class="add-one">
                <h2>Password :</h2>
               <input  name="apassword" id="apassword" type="text" placeholder="Enter Password">
                </div>

                <div class="add-one">
                <h2>Age :</h2>
               <input  name="aage" id="aage" type="text" placeholder="Enter Age">
                </div>

                <div class="add-one">
                <h2>Address :</h2>
               <input  name="aaddress" id="aaddress" type="text" placeholder="Enter Address">
                </div>

                <div class="add-one">
                <h2>Gender :</h2>
               <input  name="agender" id="agender" type="text" placeholder="Enter Gender">
                </div>

                <button type="submit" id="add-admin">Submit</button>



               </form>
             

             
           </div>

           
           <div class="remove-admin" id="remmove-user">
               <h1>REMOVE USER <img id="adminremove" src="./images/icon/cancel.png" alt="" onclick="removeuserclose()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>Username :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Username">
                </div>

                

                <button type="submit" id="remove-admin">remove</button>



               </form>
             

             
           </div>





           <div class="remove-admin" id="updateuser">
               <h1>UPDATE USER <img id="updateadminclose" src="./images/icon/cancel.png" alt="" onclick="updatecloseu()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>NAME :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                

                <button type="submit" id="update-item">search</button>



               </form>
             

             
           </div>






           <div class="bottom-left" id="itemview">
                        <div class="bottom-left-top" id="bottom-left-top">
                            <h3>Items List <img  id="close-item-view" src="./images/icon/cancel.png" alt="" onclick="closeitem()"></h3>
                            <div class="tbl-new">
                                <h3>Name</h3>
                                <h2>Price</h2>
                                <h4>Colour</h4>
                                <h1>Likes</h1>


                            </div>
                        </div>




                        <?php 


       $loop = 1;
       $sql = "SELECT * from tbl_product_details";
       mysqli_query($conn, $sql) or die('Error querying database.');
       $result = mysqli_query($conn, $sql);
?>
          <div class="bottom-left-bottom">
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
    <?php 
   ?>
   <?php    
                           $image= "./$image";
                        
                        ?>

                   







                            <div class="list-new">
                                    <div class="box-one" id="box-one">
                                    <h1 id="box-h1"><?php echo $name?></h1>
                                    </div>
                                    <div class="box-two" id="box-two">
                                    <h1 id="box-h1">$<?php echo $price?></h1>
                                    </div>
                                    <div class="box-three" id="box-three">
                                    <h1 id="box-h1" style="text-transform: uppercase;"><?php echo $colour?></h1>
                                    </div>
                                    <div class="box-four">
                                    <h1 id="box-h1"><?php echo $likes?></h1>
                                    </div>
                            </div>

                            <?php


}
?>
                            
                        </div>
                    </div>







                    <div class="add-admin" id="addpanelitem">
               <h1>ADD ITEM <img id="additem" src="./images/icon/cancel.png" alt="" onclick="iclose()"></h1>

               <form method="get" action="">

               <div class="add-one">
                <h2>Full Name :</h2>
               <input  name="iname" id="aname" type="text" placeholder="Enter Name">
                </div>

                <div class="add-one">
                <h2>Price :</h2>
               <input  name="iusername" id="ausername" type="text" placeholder="Enter Price">
                </div>

                <div class="add-one">
                <h2>Colour :</h2>
               <input  name="ipassword" id="apassword" type="text" placeholder="Enter Colour">
                </div>

                <div class="add-one">
                <h2>Likes :</h2>
               <input  name="iage" id="aage" type="text" placeholder="Enter Likes">
                </div>

                <div class="add-one">
                <h2>Category :</h2>
               <input  name="iaddress" id="aaddress" type="text" placeholder="Enter Category">
                </div>

                <div class="add-one">
                <h2>Subcategory :</h2>
               <input  name="igender" id="agender" type="text" placeholder="Enter Subcategory">
                </div>

                <button type="submit" id="add-admin">add</button>



               </form>
             

             
           </div>






           <div class="remove-admin" id="removeitem">
               <h1>REMOVE ITEM <img src="./images/icon/cancel.png" alt="" onclick="rclose()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>NAME :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                

                <button type="submit" id="remove-admin">remove</button>



               </form>
             

             
           </div>



           <div class="remove-admin" id="updateitem">
               <h1>UPDATE ITEM <img src="./images/icon/cancel.png" alt="" onclick="uclose()"></h1>

               <form method="get" action="">

               <div class="add-one" id="remove-one">
                <h2>NAME :</h2>
               <input  name="aname" id="aname" type="text" placeholder="Enter Name">
                </div>

                

                <button type="submit" id="update-item">search</button>



               </form>
             

             
           </div>











           <div class="bottom-left" id="adminview">
                        <div class="bottom-left-top" id="bottom-left-top">
                            <h3>Admin List <img  id="close-item-view" src="./images/icon/cancel.png" alt="" onclick="closeadminlist()"></h3>
                            <div class="tbl-new">
                                <h3 id="admin-name">Name</h3>
                                <h2 id="admin-username">Username</h2>
                                <h4 id="admin-password">Password</h4>
                                <h4  id="admin-age">Age</h4>
                                <h4>Address</h4>
                                <h4 id="admin-gender">Gender</h4>



                            </div>
                        </div>




                        <?php 


       $loop = 1;
       $sql = "SELECT * from users_profile";
       mysqli_query($conn, $sql) or die('Error querying database.');
       $result = mysqli_query($conn, $sql);
?>
          <div class="bottom-left-bottom">
       <?php 

       while ($row1 = mysqli_fetch_array($result))
       { 

            $uid = $row1['u_id'];
            $uname = $row1['u_name'];
            $uusername = $row1['u_username'];
            $upassword= $row1['u_password'];
            $uage = $row1['u_age'];
            $uaddress = $row1['u_address'];
            $ugender = $row1['u_gender'];
            $utype = $row1['u_account_type'];

            $uid = htmlspecialchars($row1['u_id'],ENT_QUOTES);
            $uname = htmlspecialchars($row1['u_name'],ENT_QUOTES);
            $uusername = htmlspecialchars($row1['u_username'],ENT_QUOTES);
            $upassword= htmlspecialchars($row1['u_password'],ENT_QUOTES);
            $uage = htmlspecialchars($row1['u_age'],ENT_QUOTES);
            $uaddress = htmlspecialchars($row1['u_address'],ENT_QUOTES);
            $ugender = htmlspecialchars($row1['u_gender'],ENT_QUOTES);
            $utype = htmlspecialchars($row1['u_account_type'],ENT_QUOTES);
        
     

  ?>
   <?php  if($utype=="Admin"){
                         
   ?>
   <?php     
                        
                        ?>

                   







                            <div class="list-new">
                                    <div class="box-one" id="box-one-admin">
                                    <h1 id="box-h1"><?php echo $uname?></h1>
                                    </div>
                                    <div class="box-two" id="box-two">
                                    <h1 id="box-h1"><?php echo $uusername?></h1>
                                    </div>
                                    <div class="box-three" id="box-three-admin">
                                    <h1 id="box-h1">********</h1>
                                    </div>
                                    <div class="box-four">
                                    <h1 id="box-h1"><?php echo $uage?></h1>
                                    </div>
                                    <div class="box-four" id="box-four">
                                    <h1 id="box-h1"><?php echo $uaddress?></h1>
                                    </div>
                                    <div class="box-four">
                                    <h1 id="box-h1"><?php echo $ugender?></h1>
                                    </div>
                            </div>

                            <?php

   }
}
?>
                            
                        </div>
                    </div>



                    <div class="bottom-left" id="userview">
                        <div class="bottom-left-top" id="bottom-left-top">
                            <h3>User List <img  id="close-item-view" src="./images/icon/cancel.png" alt="" onclick="closeuserlist()"></h3>
                            <div class="tbl-new">
                                <h3 id="admin-name">Name</h3>
                                <h2 id="admin-username">Username</h2>
                                <h4 id="admin-password">Password</h4>
                                <h4 id="admin-age">Age</h4>
                                <h4>Address</h4>
                                <h4 id="admin-gender">Gender</h4>



                            </div>
                        </div>




                        <?php 


       $loop = 1;
       $sql = "SELECT * from users_profile";
       mysqli_query($conn, $sql) or die('Error querying database.');
       $result = mysqli_query($conn, $sql);
?>
          <div class="bottom-left-bottom">
       <?php 

       while ($row1 = mysqli_fetch_array($result))
       { 

            $uid = $row1['u_id'];
            $uname = $row1['u_name'];
            $uusername = $row1['u_username'];
            $upassword= $row1['u_password'];
            $uage = $row1['u_age'];
            $uaddress = $row1['u_address'];
            $ugender = $row1['u_gender'];
            $utype = $row1['u_account_type'];

            $uid = htmlspecialchars($row1['u_id'],ENT_QUOTES);
            $uname = htmlspecialchars($row1['u_name'],ENT_QUOTES);
            $uusername = htmlspecialchars($row1['u_username'],ENT_QUOTES);
            $upassword= htmlspecialchars($row1['u_password'],ENT_QUOTES);
            $uage = htmlspecialchars($row1['u_age'],ENT_QUOTES);
            $uaddress = htmlspecialchars($row1['u_address'],ENT_QUOTES);
            $ugender = htmlspecialchars($row1['u_gender'],ENT_QUOTES);
            $utype = htmlspecialchars($row1['u_account_type'],ENT_QUOTES);
        
     

  ?>
    <?php   if($utype=="User"){
   ?>
   <?php    
                         
                        
                        ?>

                   







                            <div class="list-new">
                                    <div class="box-one" id="box-one-admin">
                                    <h1 id="box-h1"><?php echo $uname?></h1>
                                    </div>
                                    <div class="box-two" id="box-two">
                                    <h1 id="box-h1"><?php echo $uusername?></h1>
                                    </div>
                                    <div class="box-three" id="box-three-admin">
                                    <h1 id="box-h1">*******</h1>
                                    </div>
                                    <div class="box-four">
                                    <h1 id="box-h1"><?php echo $uage?></h1>
                                    </div>
                                    <div class="box-four" id="box-four">
                                    <h1 id="box-h1"><?php echo $uaddress?></h1>
                                    </div>
                                    <div class="box-four">
                                    <h1 id="box-h1"><?php echo $ugender?></h1>
                                    </div>
                            </div>

                            <?php

    }
}
?>
                            
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
    require 'admin-footer.php';
?>

