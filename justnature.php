<?php
include "connect.php"; 

$dynamicList = "";
$sql = mysql_query("SELECT * FROM products ORDER BY rating DESC LIMIT 4");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["productID"];
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $image = $row["image"];
			 $dynamicList .= '<div class="large-3 small-6 columns">
               <a href="product.php?id=' . $id . '"> <img src="' . $image . '"/>
                <h6 class="panel">' . $productName . '</h6></a>
			
              </div>';
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}


$featured = "";
$sql = mysql_query("SELECT * FROM products ORDER BY stock DESC LIMIT 1");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["productID"];
			 $productName = $row["productName"];
			 $price = $row["price"];
			 $sale = $row["price"]/2;
			 $image = $row["image"];
			 $description = $row["description"];
			$featured .= '<div class="large-12 small-12 columns">
					<h5>' . $productName . '</h5>
				</div>
				
				<div class="large-8 small-12 columns">
                	<img src="' . $image . '"/>
				</div>
				<div class="large-4 small-12 columns">
					
               	 <p>' . $description . '</p>
				<h5><strike>' . $price . '</strike> ' . $sale . '</h5>
			
              </div>';
    }
} else {
	$featured = "We have no products listed in our store yet";
}


mysql_close();
?>





<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Just Nature</title>

    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

</head>

<body>

		<?php include_once("template_header.php");?>
       
       
        <div class="row">
          <div class="large-12 columns">
       
           
       
            <div class="hide-for-small">
              <div id="featured">
                    <img src="http://placehold.it/1000x400&text=Slide Image" alt="slide image">
                     
                </div>
              </div>
       
           
       
       
           
       
       
          <div class="row">
            <div class="small-12 show-for-small"><br>
              <img src="http://placehold.it/1000x600&text=For Small Screens"/>
            </div>
          </div>
       
       
         
       
          </div>
        </div><br>
       
        <div class="row">
          <div class="large-12 columns">
            <div class="row">
       
           		<h4>Top Rated</h4><hr/>
       
              <?php echo $dynamicList; ?>
       
           
       
            </div>
          </div>
        </div>
       

        <div class="row">
          <div class="large-12 columns">
            <div class="row">
       
           
       
              <div class="large-6 columns">
                <div class="panel radius">
       
                <div class="row">
                <div class="large-12 small-12 columns">
       
                  <h4>About Us</h4><hr/>
                  
                </div>
                <div class="large-12 small-12 columns">
       
                  <p>Just Nature has handpicked natural, vegan ingredients from around the world to bring you nutritious and delicious snacks. We’ve work hard to create a variety of snacks and drinks for you to take wherever life takes you – always make sure to have Just Nature by your side. 
                </p>
              </div>
       
              </div>
              </div>
              </div>
       
                <div class="large-6 columns">
       
                <h4>Featured Product</h4><hr/>
       
                <?php echo $featured; ?>
       
       
              </div>
       
           
       
            </div>
          </div>
        </div>
       
           
       
        <?php include_once("template_footer.php");?>
    


</body>
</html>
