<?php
	$title= "User list Page";
	include('header.php');
	require_once('../model/dbConnection.php');
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<?php

			$connection = getConnection();
			$sql = "select * from registration";
			$result = mysqli_query($connection, $sql);

			echo "<table border = 1 cellspacing = 0>
				<tr>
					<td>Username</td>
					<td>Password</td>
					<td>Email</td>
					<td>Operations</td>
				</tr>";

			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>
						 <td>{$row['username']}</td>
						 <td>{$row['password']}</td>
						 <td>{$row['email']}</td>
						 <td> <a href='edit.php'> Edit</a> | <a href='delete.php'> Delete </a> </td>
					</tr>";
			}

			echo "</table>";
		?>
	</div>

<?php include('footer.php'); ?>