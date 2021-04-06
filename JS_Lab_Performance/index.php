<?php
	$title = "eBookShelf";
	include ('view/header.php');
?>

<?php
	if(isset($_POST['rememberMe']) || isset($_COOKIE['checkLogin']))
	{
		header('location: controller/UserLogCookieCheck.php');
	}
?>
<link rel="stylesheet" type="text/css" href="resources/CSS/style.css">
<style>
	body
	{
	  background-image: url('resources/home.JPG');
	  background-size: 100%;
	}
</style>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="left">
				<a href="index.php"> <img src="resources/logo.png" width="100%" height="100"> </a>
			</td>
			<td align="right" colspan="2">
				<br>
				<fieldset style="width: 70%" class="fieldSetBorder">
					<form method="POST" action="controller/UserLogCheck.php">
					Username &nbsp <input type="text" name="UserName" align="right"> &nbsp &nbsp &nbsp &nbsp
					Password &nbsp <input type="password" name="Password" align="right"> &nbsp &nbsp 
					<input type="checkbox" name="rememberMe"> Remember Me &nbsp | &nbsp
					<input type="submit" name="login" value="Login" class="submitBtn"> &nbsp &nbsp
				</form>
				</fieldset> 
				<br> <a href="">Login as Business User </a> &nbsp &nbsp
				<br> <a href="view/UserForgotPassowrd.php" class="linkBtn">Forgot Password? </a> &nbsp &nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td>
				<h3> &nbsp Welcome to eBookShelf </h3>
				<br>
				<p> &nbsp Connect with book reader </p>
			</td>
			<td align="center">
				<br>
					<!-- <form action="controller/UserRegCheck.php" method="POST"> -->
					<form action="" method="POST">
						<fieldset style="width:40%" class="fieldSetBorder" >
							<legend> <b> Registration </b> </legend>
							<table width="70%">
								<tr>
									<td> Name </td>
								</tr>
								<tr>
									<td>
										<input type="text" id="name" name="Name" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Email </td>
								</tr>
								<tr>
									<td>
										<input type="email" name="Email" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Username </td>
								</tr>
								<tr>
									<td>
										<input type="text" name="UserName" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Password </td>
								</tr>
								<tr>
									<td>
										<input type="password" name="Password" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Confirm Password </td>
								</tr>
								<tr>
									<td>
										<input type="password" name="rPassword" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Phone Number </td>
								</tr>
								<tr>
									<td>
										<input type="text" name="PhoneNumber" style="width: 90%">
									</td>
								</tr>
								<tr>
									<td> Gender </td>
								</tr>
								<tr>
									<td>
										<select name = "Gender" style="width: 50%">
											<option value="Male"> Male </option> Male
											<option value="Female"> Female </option> Female
											<option value="Others"> Other </option> Other
										</select>
									</td>
								</tr>
								<tr>
									<td align="center">
										<input type="submit" name="registration" value="Create Account" class="submitBtn regBtn" style="margin-top: 20px" onclick="return validateName()">
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				<br>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
				<center> eBookshelf &copy 2021 </center>
			</td>
		</tr>
	</table>


<script>
	function validateName()
	{
		let name = document.getElementById('name').value;
		if(name == "")
		{
			alert("Name must be filled out");
			return false;
		}

		let count = 0;
		for(let i =0; i<name.length; i++)
		{
			if(name[i] === " ") count += 1;
		}
		if(count === 0)
		{
			alert("Name must contain at least 2 words");
			return false;
		}

		for(let i =0; i<name.length; i++)
		{
			let curr = name.charCodeAt(i);
			if((curr > 64 && curr < 91) || (curr > 96 && curr < 123) || curr == 45 || curr == 46)
			{
				continue;
			}
			else
			{
				alert("Wrong name convention");
				return false;
			}
		}

		let firstChar = name.charAt(0);
		if(firstChar < 64 && firstChar > 91)
		{
			alert("First charecter must be capital!");
			return false;
		}
	}
</script>

<?php
	include ('view/footer.php');
?>