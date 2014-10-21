<html>
	<head>
		<title>Social Network</title>
	</head>
	<body>
		<?php
		$user = $_POST['username'];
		$pwd = $_POST['password'];
			if($user == 'User1' && $pwd == 'admin'){
				echo "Login success, Please wait.";
				header("refresh:2;url=social.php");
			}else{
				echo "Bad password, redirecting back to login in 3 seconds";
				header("refresh:3;url=index.php");
			}
		?>


	</body>
</html>
