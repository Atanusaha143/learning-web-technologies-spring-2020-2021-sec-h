<?php
	$title= "Delete Page";
	include('header.php');
	require_once('../model/dbConnection.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$sql = "select * from registration where id='{$id}'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_assoc($result);
?>

<div id="page_title">
	<h1>Delete Page</h1>
</div>

<div id='nav_bar'>
	<a href="user_list.php"> Back</a> |
	<a href="../controller/logout.php"> logout</a>	
</div>


<div id="main_content">
	<form method="post" action="">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete {$row['username']}'s account?" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php 
	include('footer.php');
	if(isset($_POST['delete']))
	{
		$id = $_GET['id'];
		$connection = getConnection();
		$sql = "delete from registration where id='{$id}'";
		$result = mysqli_query($connection,$sql);
		header('location: user_list.php');
	}
?>