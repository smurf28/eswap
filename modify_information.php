<?php
	session_start();
	$loginname=$_POST["loginname"];
	$_SESSION["loginname"]=$loginname;
	$password=$_POST["password"];
	$_SESSION["password"]=$password;
	$email=$_POST["email"];
	$_SESSION["email"]=$email;
	$phonenumber=$_POST["phonenumber"];
	$_SESSION["phonenumber"]=$phonenumber;
	$login=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);	
	$info=array($password,$login[1],$email,$phonenumber);
	$info1=implode("\n", $info);
	file_put_contents("eswap/$loginname/info.txt", $info1);
	header("Location:error.php?type=modify2");
	
		



?>