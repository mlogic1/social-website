<html>
	<head>
		<title>Social Network</title>
	</head>
	<body>
		<?php
		
		require('User.php');

		$user = $_POST['username'];
		$pwd = $_POST['password'];
			if($user == 'User1' && $pwd == 'admin'){
				session_start(); //needed for every page that uses $_SESSION global variable where we store stuff.
				//TODO search through db if user and password matches.
				echo "Login success, Please wait.";
				//create session
				$userObj = new User($user, $pwd);
				$userObj->FavouriteGame = "Minecraft";
				echo "pass2";
				//now we should have this refference to user object throught whole website to use his data.
				$_SESSION['UserObject']= serialize($userObj);
				echo "pas3";
				
				header("refresh:2;url=social.php");
				echo "pass4 ";
			}else{
				echo "Bad password, redirecting back to login in 3 seconds";
				header("refresh:3;url=index.php");
			}
		?>


	</body>
</html>
