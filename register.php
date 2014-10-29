<html>
	<head>
		<title>Social Network</title>
		<link rel="stylesheet" type="text/css" href="loginregisterstyle.css"
	</head>
		<body>
			<div class="forms" align = "center">
				<h2 class="header">New User Registration</h2>
						<form name="registration" action="actions/register_user_action.php" method="post">
							<input type="text" name="username" class="inputbox" placeholder = "Username"><br><br>
							<input type="password" name="password" class="inputbox" placeholder = "Password"><br><br>
							<input type="password" name="password2" class="inputbox" placeholder = "Repeat Password"><br><br>
							<input type="text" name="firstname" class="inputbox" placeholder = "First Name"><br><br>
							<input type="text" name="lastname" class="inputbox" placeholder = "Last Name"><br><br>
							<input  type="submit" value="Complete Registration" class="submit_button"><br>
							<!--<a href = "index.php">Already a member? Login here</a>-->
						</form>
			</div>
	</body>
</html>
