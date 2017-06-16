<?php
session_start();
	unset($_SESSION["loginname"]);
	unset($_SESSION["password"]);
	unset($_SESSION["lastname"]);
	session_destroy();
	header("Location:index.php");
?>