<?php
	session_start();
	
	if(isset($_POST['submit'])){
		
		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo "null submission...";
		}else{

			$connection = mysqli_connect('localhost','root','','user-mgt');
			$sql = "select * from registration";
			$result = mysqli_query($connection, $sql);
			// $row = mysqli_fetch_assoc($result);
			// $username = $row['username'];
			// $password = $row['password'];

			// if($username == $_POST['username'] && $password == $_POST['password']){
			// 	$_SESSION['flag'] = true;
			// 	header('location: ../view/home.php');
			// }else{
			// 	echo "invalid user";
			// }

			$check = false;
			while($row = mysqli_fetch_assoc($result))
			{
				$username = $row['username'];
				$password = $row['password'];
				if($username == $_POST['username'] && $password == $_POST['password'])
				{
					$check = true;
					$_SESSION['flag'] = true;
					$_SESSION['currUsername'] = $username;
					$_SESSION['currPassword'] = $password; 
					header('location: ../view/home.php');
				}
			}

			if($check == false)
			{
				echo "Invalid User";
			}
		}

	}
?>