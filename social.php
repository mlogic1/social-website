<html>
	<head>
		<title>Social Network Front Page</title>
	</head>
	<body>
		<div align = "center">
			<h2>Your front page</h2>
			<p></p><?php
				session_start(); //needed for every page that uses $_SESSION global variable where we store stuff.
				require('User.php'); //apparently we need this too.

				$userObj = unserialize($_SESSION['UserObject']);
				echo $userObj->FavouriteGame;
			
			
			?>
			
			</p>
		</div>
	</body>
</html>
