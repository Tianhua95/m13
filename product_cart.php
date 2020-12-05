
<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
		// include_once "parts/templates.php";
	//$cart = makeQuery(
		//makeConn(), 
		//"SELECT * FROM `products` WHERE `id` IN (5, 8, 7) ");


	$cart_items = getCartItems();

	// print_p($product);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body class="body1">
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container">
		<h2>In Your Cart</h2>
		
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>
	</div>


<?php include "parts/footer.php"; ?>

</body>
</html>
