<?php

	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');

	$connection = getConnection();
	$productList = getAllProduct();
?>

<div id="main_content">
	<fieldset style="width: 20%">
		<legend>SEARCH</legend>
		<form method="POST" action="">
			<input type="text" name="name" style="width: 50%">
			<input type="submit" name="search" value="Search By Name">
		</form>
		<?php
			if(!isset($_POST['search']))
			{
				echo "<table border = 1 cellspacing = 0>
					<tr>
						<td>Name</td>
						<td>Profit</td>
						<td>Operations</td>
					</tr>";

				for($i = 0; $i < count($productList); $i++)
				{
					$profit = $productList[$i]['sellingPrice'] - $productList[$i]['buyingPrice'];
					echo "<tr>
							 <td>{$productList[$i]['name']}</td>
							 <td>{$profit}</td>
							 <td> <a href='editProduct.php?id={$productList[$i]['id']}'> Edit</a> | <a href='deleteProduct.php?id={$productList[$i]['id']}'> Delete </a> </td>
						</tr>";
				}

				echo "</table>";
			}
			else
			{
				$name = $_POST['name'];
				$connection = getConnection();
				$searchProduct = searchByName($name);

				if($searchProduct)
				{
					echo "<table border = 1 cellspacing = 0>
					<tr>
						<td>Name</td>
						<td>Profit</td>
						<td>Operations</td>
					</tr>";

					$profit = $searchProduct['sellingPrice'] - $searchProduct['buyingPrice'];
					echo "<tr>
							 <td>{$searchProduct['name']}</td>
							 <td>{$profit}</td>
							 <td> <a href='editProduct.php?id={$searchProduct['id']}'> Edit</a> | <a href='deleteProduct.php?id={$searchProduct['id']}'> Delete </a> </td>
						</tr>";

					echo "</table>";
				}
				else
				{
					echo "Product is not in the list!";
				}
			}
		?>
	</fieldset>
</div>