<?php
	
	require_once('../model/userModel.php');
	require_once('../model/dbConnection.php');
	if(isset($_POST['change']))
	{
		
		if($_POST['cPass'] == "" || $_POST['nPass'] == "" || $_POST['rPass'] == "")
		{
			echo "null submission...";
		}
		elseif($_POST['nPass'] != $_POST['rPass'])
		{
			echo "New password and Retype New password mismatch!";
		}
		else
		{
			session_start();
			$currUser = getUserById($_SESSION['currUserId']);
			$id = $currUser['id'];
			$password = $currUser['password'];
			$newPass = $_POST['nPass'];
			if($_POST['cPass'] != $password)
			{
				echo "Your entered current password is wrong";
			}
			else
			{
				$check = updateUserPassword($id, $newPass);
				if($check)
				{
					echo "Password changed!";
				}
				else
				{
					echo "Error occured!";
				}
			}
		}

	}

?>