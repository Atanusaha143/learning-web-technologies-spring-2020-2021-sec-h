<?php
	session_start();
	if(isset($_POST['login']) && filesize('../model/all_info.json')>0)
	{

		$userFile = fopen("../model/all_info.json", "r");
		$userData = fread($userFile, filesize('../model/all_info.json'));
		$userInfo_filter = explode("\n", $userData);

		for($i=0; $i<count($userInfo_filter); $i++) 
		{
				$userInfo = json_decode($userInfo_filter[$i], true);
				$id = $userInfo['id'];
				$password = $userInfo['password'];
				$type = $userInfo['type'];

				if($id == "" || $password == "")
				{
					echo "Please enter Username and Passwordd";
				}
				else
				{

					if($id == $_POST['id'] && $password == $_POST['password'])
					{
						$_SESSION['flag'] = true;
						$_SESSION['name'] = $userInfo['name'];
						$_SESSION['id'] = $userInfo['id'];
						$_SESSION['password'] = $userInfo['password'];
						$_SESSION['type'] = $userInfo['type'];
						
						if($type == 'user')
						{
							header('location: ../view/user_home.php');
						}
						else
						{
							header('location: ../view/admin_home.php');
						}
					}
					else
					{
						echo "Invalid Id and Password!";
					}
				} 
		}
	}
	else
	{
		echo "Please register first!";
	}
?>