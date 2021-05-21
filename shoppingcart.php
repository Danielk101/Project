<?php 
include('./includes/header.php');
include('./includes/include.php'); 


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Product is al toegevoegd!")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Product Verwijderd")</script>';
				echo '<script>window.location="shoppingcart"</script>';
			}
		}
	}
}

?>
<div class="container">
			<div style="clear:both"></div>
			<br />
			<h3>Winkelwagen</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Product Naam</th>
						<th width="10%">Aantal</th>
						<th width="20%">Prijs</th>
						<th width="15%">Totaal</th>
						<th width="5%">Actie</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?></td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shoppingcart?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Verwijder</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
				<form method="post" action="./checkout">
					<?php 
					if(isset($_SESSION['loggedin'])) : ?>
						<button class="btn btn-success" type="submit">Ga door naar Checkout</button>
					<?php else : ?>
						<a href="./login" class="btn btn-warning">Inloggen om te betalen!</a>
					<?php endif ?> 
				</form>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>


<?php include('./includes/footer.html'); ?>