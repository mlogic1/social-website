<?php
class User
{
	
	public $UserName;
	public $FavouriteGame;
	
	private $Password;

	
	function __construct($UserName, $Password)
	{
		//when creating a user we need his username and password.
		$this->$UserName = $UserName;
		$this -> $Password = $Password;
		//create him in database.
		//
	}
	
	public function createUser()
	{
		//database create user...
		
	}
	
	public function saveUserData()
	{
		//save his data into database
		
		
	}
	public function getUserData()
	{
		//this should connect to database and get data about user
		//get user by userName(key), initialise all his crap.
		
	}	
}

/*$u = new User("John", "doe");
$u->FavouriteGame = "hey";
echo $u->FavouriteGame;*/


?>
