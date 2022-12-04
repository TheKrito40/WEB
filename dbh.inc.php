<?php

$serverName = "fdb32.awardspace.net";
$dBUsername = "4165195_hkr";
$dBPassword = ";wPNh%_f8g{nIUom";
$dBName = "4165195_hkr";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed : " .mysqli_connect_error());	
}