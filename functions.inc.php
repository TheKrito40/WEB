<?php

function emptyInputsSingup($username, $pwd, $pwdRepeat, $email) {
	$result;
	if (empty($username) || empty($pwd) || empty($pwdRepeat) || empty($email)){
	$result = true;
	}
	else{
	$result = false;
	}
	return $result;
}

function emptyInvalidName($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
	$result = true;
	}
	else{
	$result = false;
	}
	return $result;
}


function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if ($pwd !== $pwdRepeat){
	$result = true;
	}
	else{
	$result = false;
	}
	return $result;
}

function usernameExists($conn, $username, $email) {
	$sql = "SELECT * FROM accounts WHERE accountsEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: ../register.php?error=stmtfailed");
	exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	} 	
	mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $pwd, $email) {
	$sql = "INSERT INTO accounts (accountsUsername, accountsPassword, accountsEmail) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: ../register.php?error=stmtfailed");
	exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../register.php?error=none");
	exit();
}

function emptyInputsLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)){
	$result = true;
	}
	else{
	$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd) {
	$usernameExists = usernameExists($conn, $username);
	if ($usernameExists === false) {
	header ("location: ../login.php?error=wronglogin");
	exit();
	}

	$pwdHashed = $usernameExists["accountsPassword"];
	$checkPwd = password_verify($pwd, $pwdHashed);
	if ($checkPwd === false) {
	header ("location: ../login.php?error=wronglogin");
	exit();			
	}
	else if ($checkPwd === true) {
		session_start();
		$_SESSION["accountsId"] = $usernameExists["accountsId"];
		$_SESSION["accountsUsername"] = $usernameExists["accountsUsername"];
		header ("location: ../index.php");
		exit();	

	}

}