<?php
	session_start();
	#include("include/util.php");
	
	$type = $_GET["type"];
	if ( $type === "todo" ) {
		$message = "The content of a todo cannot be empty";
		$action = "notes.php";
	} elseif ( $type === "note" ) {
		$message = "The title of a note cannot be empty";
		$action = "notes.php";
	} elseif ( $type === "login1" ) {
		$message = "Your login  is incorrect";
		$action = "sign_in_form.php";
	} elseif ( $type === "login2" ) {
		$message = "Your  password is incorrect";
		$action = "sign_up.php";	
	} elseif ( $type === "firstname" ) {
		$message = "First name is incorrect";
		$action = "home.php";
	} elseif ( $type === "lastname" ) {
		$message = "Last name is incorrect";
		$action = "home.php";
	} elseif ( $type === "logup" ) {
		$message = "Login is incorrect";
		$action = "home.php";
	} elseif ( $type === "pwdup" ) {
		$message = "Password is incorrect";
		$action = "home.php";		
	} elseif($type==="login"){
		$message="No login";
		$action="home.php";
	}elseif($type==="forgetpwd"){
		$message="Your phonenumber is false";
		$action="forget-password-form.php";
	}elseif($type==="nosame"){
		$message="Twice passwords do not match";
		$action="modify-password-form.php";
	}elseif($type==="modify"){
		$message="Modify succeed";
		$action="sign_in_form.php";
	}elseif($type==="modify2"){
		$message="Modify succeed";
		$action="information.php";
	}else{ # type === nologin
		$message = "You must sign in to use 2DO";
		$action = "sign_in_form.php";
	}
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>eswap-error</title>
    <meta charset="utf-8" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
    <link href="css/form.css" type="text/css" rel="stylesheet" />
  </head>
<body>
	
	<div id="up">
        <div id="login">    
        </div><!--login-->
    </div>
        <a href="index.php"><img src="img/triangle.png"></a>

	<div class="form_style">
 
		<form class="form_style" method="get" action="<?=$action?>">
			<div><?= $message ?></div>
			<div class="submit">
				<input class="button" type="submit" value="OK" />
			</div>
		</form>

	</div>

</body>
</html>