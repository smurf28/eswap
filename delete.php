<?php
	function deleteDir($dir)
	{
		if (rmdir($dir)==false && is_dir($dir)) {
			if ($dp = opendir($dir)) {
  				while (($file=readdir($dp)) != false) {
   					if (is_dir("$dir/$file") && $file!='.' && $file!='..') {
    					deleteDir("$dir/$file");
   						} else {
    					unlink("$dir/$file");
   					}
  				}

  			closedir($dp);
 			} else {
  			return false;
 			}
 			rmdir($dir);
		} 
		return true;
	} 
	$id=$_GET["id"];
	$name=$_GET["name"];
	$file = "eswap/$name/goods/$id";
	
	if(deleteDir($file)==true){
		header("Location:information.php");
	}
	else{
		header("Location:error.php");
	}
?>