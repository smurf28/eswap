<?php
	session_start();
	$loginname=$_POST["loginname"];
	$_SESSION["loginname"]=$loginname;
	$password=$_POST["password"];
	$_SESSION["password"]=$password;
	$pwd=$_POST["confirmation"];
	$_SESSION["confirmation"]=$pwd;
	
	$login=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);
	if($password==$pwd)
	{
		#str_replace($login[0], $password, $login[0]);
		$info=array($password,$login[1],$login[2],$login[3]);
		$info1=implode("\n", $info);
		file_put_contents("eswap/$loginname/info.txt", $info1);
		header("Location:error.php?type=modify");
	}
	else{
		header("Location:error.php?type=nosame");
	}
		



?>