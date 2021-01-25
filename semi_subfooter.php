<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylus.css">
</head>
<body>
    


<div class="footer">
        <div class="subscribe">
            <h1>Keep Connected</h1>
            <h3>Subscribe to Get Our Weekly Newsletter Updates</h3>
            <div class="subscribe-bar">
                <input type="text" placeholder="ENTER YOUR EMAIL HERE">
                <button id="bar-button">Subscribe</button>
            </div>
            
        </div>
        <div class="social">
            <a href="#"> <img id="facebook" src="../../images/social/facebook.png" alt=""></a>
            <a href="#"> <img id="whatsapp" src="../../images/social/whatsapp.png" alt=""></a>
            <a href="#"> <img id="instagram" src="../../images/social/instagram.png" alt=""></a>
            <a href="#"> <img id="pinterest" src="../../images/social/pinterest.png" alt=""></a>
            <a href="#"> <img id="youtube" src="../../images/social/youtube.png" alt=""></a>
        </div>
        <div class="end">
            <div class="end-left">
                <img src="../../images/logo.png" alt="">
            </div>
            <div class="end-center">
                <a href="#">PRIVACY POLICY</a>
                <a href="#">TERMS OF USE</a>
                <a href="#">SALES AND REFUNDS</a>
            </div>
            <div class="end-right">
                <img src="../../images/payment/mastercard.png" alt="">
                <img src="../../images/payment/paypal.png" alt="" >
                <img src="../../images/payment/visa.png" alt="">
            </div>
            
        </div>
    </div>

    
    </body>

       
    <script src="../../js/index.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-ui.js"></script>
    
    <script>
    $( function() {
      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
      });
      $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );

    
    </script>

</html>