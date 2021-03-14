<?php
	if(isset($_POST['signUp']))
	{

		$userInfo = array(
					 	'id' => $_POST['id'],
						 'password' => $_POST['password'],
						 'cPassword' => $_POST['cPassword'],
						 'type' => $_POST['user'],
		      		);

		$allData = json_encode($userInfo);
		$userData = fopen("../model/all_info.json", "a");
		fwrite($userData, $allData."\r\n");
		fclose($userData);

		if($_POST['user'] == 'user')
		{
			$allData = json_encode($userInfo);
				$userData = fopen("../model/user_info.json", "a");
				fwrite($userData, $allData."\r\n");
				fclose($userData);
				header('location: ../view/user_login.php');
		}
		else
		{
			$allData = json_encode($userInfo);
				$userData = fopen("../model/admin_info.json", "a");
				fwrite($userData, $allData."\r\n");
				fclose($userData);
				header('location: ../view/user_login.php');
		}


	}
?>