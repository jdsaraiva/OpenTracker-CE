<?php

$username = $_POST['username'];
$password  = $_POST['password'];

// Meant to be practical and not 1337
if( ($username=='admin' || $password=='admin') )
{
	session_start();
	$_SESSION["login"] = "true";
	$_SESSION["username"] = $_POST['username'];
	header("Location:../tracker.php");

}
else
    header("Location:../index.html");