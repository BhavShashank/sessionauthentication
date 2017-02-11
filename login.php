<?php 
	session_start(); //we started the session here 
	if (isset($_SESSION['username'])) { //checking if the session is already created or not
		header('location: index.php'); //if the result is true which is a session is already active then header function will redirect us to index.html
	}
	else { //if the result will be false, then we will ask user to login 
		if (isset($_POST['submit'])) { 
		//isset function will check if the submit button is clicked or set or not
				if (empty($_POST['username']) || empty($_POST['password'])) { 
				//with empty function we are checking if user has entered a value or not
					$error = 'All fields are required';
					 //if not then this error variable will echo out the result on the screen
				}
				else {
				 //if user have supplied values in the username and password box then we will check if the values are correct or not
					$username = $_POST['username']; 
					//here we store the values in variable supplied by the user in super global function $_POST
					$password = $_POST['password']; 
					//the value supplied for password by the user goes here
					if ($username == 'internshala' && $password == 'internshala') { 
					//since it very basic we will check with our inputs here
						$_SESSION['username'] = $username;
					// now here if the value supplied by the user is true then we initialize session with $username variable
						header('location: index.php'); //this function is used to redirect the use to particular location, in out case its index.html
					}
					else { 
					//if the value supplied by user is incorrect then this block of code will execute
						$error = 'Username or password is inavlid'; 
					}
				}
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="title">Login Here to Continue</h1>
		<form method="post">
			<input type="text" name="username" placeholder="Enter the username"> <br />
			<input type="password" name="password" placeholder="Enter the password"> <br />
			<p> <?php if(isset($error)) echo $error; ?></p> 
			<!--When there will be any error from the user side (for example: wrong username or password) this function will trigger $error on the screen-->
			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>
