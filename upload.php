<?php 

	session_start();
$sb= $_SESSION["loginname"];
#$sb=1;
//title

$arr=glob("eswap/$sb/goods/*");
$j=count($arr);
$j--;
$k=basename($arr[$j]);
$i=intval($k);
$i++;
mkdir("eswap/$sb/goods/$i");
mkdir("eswap/$sb/goods/$i/reply");
mkdir("eswap/$sb/goods/$i/picture");
$title=$_POST["title"];
$discrib=$_POST["discrib"];
$c1=$_POST["classify1"];
$title2=$_POST["title2"];

$inf=array($title,$discrib,$c1,$title2,date("Y-m-d h:ia"));
$information=implode("\n", $inf);

if (is_uploaded_file($_FILES["picture1"]["tmp_name"]))
	move_uploaded_file($_FILES["picture1"]["tmp_name"], "eswap/$sb/goods/$i/picture/picture1.png");
if (is_uploaded_file($_FILES["picture2"]["tmp_name"]))
	 move_uploaded_file($_FILES["picture2"]["tmp_name"], "eswap/$sb/goods/$i/picture/picture2.png");
if (is_uploaded_file($_FILES["picture3"]["tmp_name"]))
	  move_uploaded_file($_FILES["picture3"]["tmp_name"], "eswap/$sb/goods/$i/picture/picture3.png");
	echo "$information";
	file_put_contents("eswap/$sb/goods/$i/inf.txt", $information);
//have  TXT
	file_put_contents("upload.txt", $sb."\n".$i."\n",FILE_APPEND);
	echo "your good's information has been uploaded!";
	header("Location:information.php");
	?>