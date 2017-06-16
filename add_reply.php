<?php
session_start();
$good= $_GET["good"];
$sb= $_GET["sb"];
$whose=$_GET["whose"];
$reply=$_GET["reply"];
$re=array($sb,$reply);
$re=implode("\n",$re);

$rep=glob("eswap/$whose/goods/$good/reply/re*.txt");
$m=count($rep);
$m++;

file_put_contents("eswap/$whose/goods/$good/reply/re$m.txt",$re);
header("Location:goods.php?i=$good&name=$whose");
?>