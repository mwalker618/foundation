<?php
include "connect.php"; 

$fruitList = "";
$sql = mysql_query("SELECT * FROM products WHERE productCategory='snacks'");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["productID"];
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $image = $row["image"];
			 $fruitList .= '<div class="large-4 small-6 columns">
                  <img src="' . $image . '">
     
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
              <div class="row">
     
                <div class="large-4 small-6 columns">
                  <img src="http://placehold.it/1000x1000&text=Thumbnail">
                  
                  <h4>Dried Fruit</h4><hr/>
                  
                  <?php echo $fruitList; ?>
     
                  
              </div>
     
         
     
     
         
              <div class="row">
                <div class="large-12 columns">
                  <div class="panel">
                    <div class="row">
     
                      <div class="large-2 small-6 columns">
                        <img src="http://placehold.it/300x300&text=Site Owner">
                      </div>
     
                      <div class="large-10 small-6 columns">
                        <strong>This Site Is Managed By<hr/></strong>
     
                        Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
                      </div>
     
                    </div>
                  </div>
                </div>
     
         
     
              </div>
            </div>
          </div>
     
     
         
     
        <footer class="row">
        <div class="large-12 columns">
          <hr>
          <div class="row">
            <div class="large-9 columns">
              <p>This site is not official and is an assignment for a UCF Digital Media course</p>
            </div>
            <div class="large-3 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>

              </ul>
            </div>
          </div>
        </div>
        </footer>
     
         
     
        </div>
      </div>
    
  
  

  </body>
</html>
