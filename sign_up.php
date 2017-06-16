<?php
	session_start();
	
	$loginname=$_POST["login"];
	$_SESSION["login"]=$loginname;
	mkdir("eswap/$loginname");
	mkdir("eswap/$loginname/goods");
	#mkdir("2doDB/$firstname/notes");
	$email=$_POST["email"];
	$_SESSION["email"]=$email;
	$phonenumber=$_POST["phonenumber"];
	$_SESSION["phonenumber"]=$phonenumber;
	$password=$_POST["password"];
	$_SESSION["password"]=$password;
	$info=array($password,$loginname,$email,$phonenumber);
	$info1=implode("\n", $info);
	file_put_contents("eswap/$loginname/info.txt", $info1);

	if(isset($info1))
		header("Location:sign_in_form.php");


?>