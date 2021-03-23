<?php

	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');
	$userList = getAllUser();
?>

<div id="main_content">
		<?php
		echo "<table border = 1 cellspacing = 0>
			<tr>
				<td colspan=4 align='center'> Users </td>
			</td>
			<tr>
				<th>ID</td>
				<th>NAME</td>
				<th>EMAIL</td>
				<th>USER TYPE</td>
			</tr>";

		for($i = 0; $i < count($userList); $i++)
		{
			echo "<tr>
					 <td>{$userList[$i]['id']}</td>
					 <td>{$userList[$i]['name']}</td>
					 <td>{$userList[$i]['email']}</td>
					 <td>{$userList[$i]['type']}</td>
				</tr>";
		}
		echo "<tr>
				<td colspan=4 align='right'>
					<a href='adminHome.php'> Go Home </a> 
				</td>
			</tr>";	
		echo "</table>";
	?>
</div>