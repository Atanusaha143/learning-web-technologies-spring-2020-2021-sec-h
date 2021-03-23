<?php //Author: Atanu Saha
	require_once('../model/userModel.php');
	require_once('../model/dbConnection.php');
	if(isset($_POST['login']))
	{
		
		if($_POST['id'] == "" || $_POST['password'] == "")
		{
			echo "null submission...";
		}
		else
		{
			session_start();
			$check = false;
			$currUser = getUserById($_POST['id']);
			$id = $currUser['id'];
			$password = $currUser['password'];
			$type = $currUser['type'];

			if($id == $_POST['id'] && $password == $_POST['password'])
			{
				$check = true;
				$_SESSION['currUserId'] = $id;
				if($type == 'user')
				{
					header('location: ../view/userHome.php');
				}
				else
				{
					header('location: ../view/adminHome.php');
				}
			}

			if($check == false)
			{
				echo "Invalid User";
			}
		}

	}
?>