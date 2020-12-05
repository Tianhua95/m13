<?php 
	include_once "lib/php/functions.php"; 
	include_once "parts/templates.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blingbling & Co.</title>


	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Halant&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

</head>
<body class="body1">


<div class="heroimage">

		<div class="freeship">
			<h3>FREE SHIPPING OVER $100. GET 10% OFF.</h3>
		</div>

		<div class="navba">
			<ul class="navr">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Product</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>

		</div>

	

		<div class="title1">
			<h1>Blingbling & Co.</h1>
		</div>

		<div class="container ab">
  			<div class="row">
    			<div class="col-sm">
     				<h2>Jewellery</h2>
					<p>Our jewelry builds on a legacy of over 100 years of craftsmanship with beautifully designed necklaces and pendants, bracelets, rings and more.</p>
					<!-- <a href="product_list.php" class="form-button1">All New</a> -->
   				 </div>
  			</div>
		</div>
	</div>


	<!-- <div class="container">
		<div class="card soft">
			<h2>Information</h2>
			<p>You'll love these products</p>
		</div>
	</div> -->

	<div class="container">
		<h2>Latest Bracelet</h2>
		<?php recommendedCategory("bracelet"); ?>
		<h2>Latest Earring</h2>
		<?php recommendedCategory("earring"); ?>
	</div>
		<!-- FOOTER -->
	<footer class="footer1">
		<p>@Tianhua Huang 2020 Fall WNM608</p>
	</footer>
</body>
</html>
