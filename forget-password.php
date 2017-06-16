<?php
	session_start();
	$phonenumber=$_POST["phonenumber"];
	$_SESSION["phonenumber"]=$phonenumber;
	$loginname=$_POST["loginname"];
	$_SESSION["loginname"]=$loginname;
	$login=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);

	if($phonenumber==$login[3])
	{
		header("Location:modify-password-form.php");
	}
	elseif($pwd!=$login[0]) {
		header("Location:error.php?type=forgetpwd");
	}
		



?>
