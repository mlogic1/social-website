<?php

$user = 'root';
$pass = '';
$db = 'users';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2']; 
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 


if($password !== $password2){
	echo "Passwords do not match! Please try again! Redirecting...";
	header("refresh:10;url=../register.php");
	return;
}

//create connection and check for error
$db = new mysqli('localhost', $user, $pass, $db) or die("Error connecting to database");

//no error, proceed
echo "Successfully connected to the database! <br>";
header("refresh:5;url=index.php");


//add values to the DB
$sql = "INSERT INTO user (firstname, lastname, password, username)
VALUES ('$firstname', '$lastname', '$password', '$username')";


if($db->query($sql) === TRUE){
	echo "Successfully added a new user to the DB<br>";
	$imagespath = "images/" . $username;
	$foldercreator = mkdir($imagespath, 0777);
		if($foldercreator == 1){
				echo "Created user folder for images: <b>" . $imagespath . "</b>";
		}
}else{
	echo "<b>Something went wrong: </b>" . $sql . $db->error;
	}

?>
