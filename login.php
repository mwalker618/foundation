<?php
include "connect.php"; 





mysql_close();
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <?php include_once("template_header.php");?>

         

         





         

        <div class="row">
        <hr>
            
            <div class="large-12 columns">
                <h4>Review Information</h4>
                
            </div>
            
            <div class="large-6 columns">
                <h4>Shipment Info</h4><hr>
                
                <p>1234 Ranbow Road</p>
                <p>Orlando, FL</p>
                <p>32817</p>
                
            </div>
            
            <div class="large-6 columns">
                <h4>Billing Info</h4><hr>
                
                <p>Card ending in 1986</p>
                <p>1234 Ranbow Road</p>
                <p>Orlando, FL</p>
                <p>32817</p>
                
            </div>

        </div>
        <div class="row">
       		 <div class="large-12 columns">
        		<a href="complete2.php" class="small button">Place Order</a>
            </div>
        </div>





 		<?php include_once("template_footer.php");?>
    
  </body>
</html>
