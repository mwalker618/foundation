<?php
include "connect.php"; 

$fruitList = "";
$sql = mysql_query("SELECT * FROM products WHERE productSubcategory='Dried Fruit'");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["productID"];
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $image = $row["image"];
			 $fruitList .= '<div class="large-4 small-6 columns">
			 		<a href="product.php?id=' . $id . '">
                  <img src="' . $image . '">
     				</a>
                  <div class="panel">
                    <h5>' . $productName . '</h5>
                    <h6 class="subheader">$' . $price . '</h6>
                  </div>
                </div>';
    }
} else {
	$fruitList = "Coming Soon";
}
mysql_close();
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Snacks</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

     
         
          <?php include_once("template_header.php");?>
     
         
     
          <div class="row">
     		<div class="large-12 columns">
            	<h4>Snacks</h4>
            </div>
 
            <div class="large-12 columns">
              <div class="row">
     
                
                  
                  
                  <?php echo $fruitList; ?>
     
                  
              </div>
     
         	</div>
     
     
         
              
            </div>
          </div>
     
     
         
     
       <?php include_once("template_footer.php");?>
     
         
     
        </div>
      </div>
    
  
  

  </body>
</html>
