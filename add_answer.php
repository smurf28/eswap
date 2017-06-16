<?php
session_start();
$good= $_GET["good"];
 $whose= $_GET["whose"];
$sb= $_GET["sb"];
$renum=$_GET["renum"];

$reply=$_GET["reply"];
$re=array($sb,$reply);
$re=implode("\n",$re);

file_put_contents("eswap/$whose/goods/$good/reply/re$renum.txt","\n".$re,FILE_APPEND);
header("Location:goods.php?i=$good&name=$whose");
?>