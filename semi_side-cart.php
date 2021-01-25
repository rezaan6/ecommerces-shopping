

<?php 

$conn = mysqli_connect('localhost','root','','shopping', '3306')
or die('Error connecting to MySQL server.');




$total=0;



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

<div class="cartbox-single" id="ID">

    <div class="cartbox-left">
     <img src="<?php echo $cimage ?>" alt="" id = "cartbox-img">

    </div>

    <div class="cartbox-right">
        <div class="cartbox-name">
        <h5><?php echo $cname?></h5>
        </div>

        <div class="cartbox-right-bottom">

            <div class="cartbox-quantity">
            <h5 id="<?php echo $cimage?>qty">QUANTITY</h5>
            <h5>1</h5>
            </div>


            <div class="cartbox-price">
            <h5>PRICE</h5>
            <h5>$<?php echo $cprice?> </h5>
            </div>
        </div>
    </div>


</div>






    





































</body>

    






<?php
























}


















?>