<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="../controller/user_reg_check.php">
		<fieldset style="width: 15%">
			<legend>
				<b>REGISTRATION</b>
			</legend>
			<table>
				<tr>
					<td>
						Id
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="id">
					</td>
				</tr>

				<tr>
					<td>
						Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password">
					</td>
				</tr>

				<tr>
					<td>
						Confirm Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="cPassword">
					</td>
				</tr>

				<tr>
					<td>
						Name
					</td>
				</tr>
				<tr>
					<td>
						<input type="name" name="name">
					</td>
				</tr>

				<tr>
					<td>
						User Type
					</td>
				</tr>
				<tr>
					<td> <hr> </td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="user" value="user"> User
						<input type="radio" name="user" value="admin"> Admin
					</td>
				</tr>

				<tr>
					<td> <hr> </td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="signUp" value="Sign Up">
					</td>
					<td>
						<a href="user_login.php"> Sign In </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>