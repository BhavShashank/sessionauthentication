<?php
session_start(); //
if(isset($_SESSION['username'])){ //checking if session is active or not
session_destroy(); //if session is active destroy the session
}
header('location: login.php'); //and redirect the user to login.php
?>