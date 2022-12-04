<?php
	$username = $_POST["username"];
	$pwd  = $_POST["password"];
	$email = $_POST["email"];
	$pwdRepeat  = $_POST["confirm_password"];

if (isset($_POST["submit"])) {
	

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputsSingup($username, $pwd, $pwdRepeat, $email) !== false) {
		header("location: ../register.php?error=emptyinput");
	    exit();
	}

	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../register.php?error=diffpwd");
	    exit();
	}

	if (emptyInvalidName($username) !== false) {
		header("location: ../register.php?error=invalidusername");
	    exit();
	}

	if (usernameExists($conn, $username, $email) !== false) {
		header("location: ../register.php?error=userused");
	    exit();
	}

	createUser($conn, $username, $pwd, $email);

}
else{
	header("location: ../register.php");
	exit();
}