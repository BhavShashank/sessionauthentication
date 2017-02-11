<?php session_start(); //started session

	if (!isset($_SESSION['username'])) { //checking if session is not active then redirect the user to login.php page
		header('location: login.php');
	}
	else{ //if the session is active let the user access this page
//here your index page will be visible only to registered user
 ?>
welcome	<?php echo $_SESSION['username'];  //printing the usrname using the session variable 
 } ?>

<a href="logout.php"> Logout</a>
