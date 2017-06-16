<?php
	session_start();
	$loginname=$_POST["login"];
	$_SESSION["loginname"]=$loginname;
	$pwd=$_POST["password"];
	$_SESSION["password"]=$pwd;
	$login=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);
	$good=null;
	$name=null;
	if (!empty($_SESSION["i"])&&!empty($_SESSION["name"])) {
		$good=$_SESSION["i"];
		$name=$_SESSION["name"];
	}
	if(($pwd==$login[0])&&(($loginname==$login[1])))
	{
		if(!empty($good))
		{
			header("Location:goods.php?i=$good&name=$name");
			
			}
		else
		{
			header("Location:index.php");
			}
	}
	elseif ($pwd!=$login[0]) {
		header("Location:error.php?type=login2");
	}
	elseif ($loginname!=$login[1]) {
		header("Location:error.php?type=login1");
	}
?>