
<?php


$conn = mysqli_connect('localhost','root','','shopping', '3306')
or die('Error connecting to MySQL server.');



if (empty($_SESSION['username']) 
&& empty($_SESSION['type'])
&& empty($_SESSION['gender'])
&& empty($_SESSION['address'])
&& empty($_SESSION['password']) ){


$_SESSION['username']=""; 
$_SESSION['type'] ="";
$_SESSION['gender'] ="";
$_SESSION['address']="";
$_SESSION['password'] ="";
}



  $a= $uusername= $_SESSION['username'] ;
  $b= $utype = $_SESSION['type'] ;
  $c= $ugender= $_SESSION['gender'] ;
  $d= $uaddress = $_SESSION['address'] ;
  $upassword= $_SESSION['password'] ;
  
  


                




               if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {




$sql8 = "SELECT * from users_profile";  

$result8 = mysqli_query($conn, $sql8);


while ($row8 = mysqli_fetch_array($result8)){
    $uid = $row8['u_id'];
    $uname = $row8['u_name'];
    $uusername = $row8['u_username'];
    $upassword= $row8['u_password'];
    $utype = $row8['u_account_type'];
    $uage = $row8['u_age'];
    $uaddress = $row8['u_address'];
    $ugender = $row8['u_gender'];

    $uid = htmlspecialchars($row8['u_id'],ENT_QUOTES);
    $uname = htmlspecialchars($row8['u_name'],ENT_QUOTES);
    $uusername = htmlspecialchars($row8['u_username'],ENT_QUOTES);
    $upassword= htmlspecialchars($row8['u_password'],ENT_QUOTES);
    $utype = htmlspecialchars($row8['u_account_type'],ENT_QUOTES);
    $uage = htmlspecialchars($row8['u_age'],ENT_QUOTES);
    $uaddress = htmlspecialchars($row8['u_address'],ENT_QUOTES);
    $ugender = htmlspecialchars($row8['u_gender'],ENT_QUOTES);

    

    
                if ($_POST['username'] == $uusername && 
                $_POST['password'] == $upassword) {
                  $a =  $_SESSION['username'] = $uusername;
                  $b =  $_SESSION['type'] = $utype;
                  $c =  $_SESSION['gender'] = $ugender;
                  $d =  $_SESSION['address'] = $uaddress;
                    $_SESSION['password'] = $upassword;
                   
                
                  
                }
                   
              








               
}
             
            }


        


             elseif (isset($_POST['logout'])){
                $a =  $_SESSION['username'] = "";
                $b =  $_SESSION['type'] = "";
                  $_SESSION['password'] = "";
               

             }
               ?>   
