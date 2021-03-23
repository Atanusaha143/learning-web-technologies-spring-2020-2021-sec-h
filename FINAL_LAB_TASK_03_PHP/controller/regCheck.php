<?php //Author: Atanu Saha
	
	require_once('../model/dbConnection.php');
	require_once('../model/userModel.php');

	if(isset($_POST['register']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if($id == "" || $password == "" || $cPassword == "" || $name == "" || $email == "")
		{
			echo "null submission...";
		}else
		{

			if($password == $cPassword)
			{
				$userDetails = array('id' => $id, 'password' => $password, 'name' => $name, 'email' => $email, 'type' => $type);
				$check = insertUser($userDetails);
				if($check)
				{
					echo "User added!";
					header('location: ../view/login.php');
				}
				else
				{
					echo "Error occured!";
				}
			}
			else
			{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>