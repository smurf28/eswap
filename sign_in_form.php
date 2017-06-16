<html>
  <head>
    <title>eSwap</title>
    <meta charset="utf-8" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
    <link href="css/form.css" type="text/css" rel="stylesheet" />
  </head>

<body>
	<div id="up">
        <div id="login">    
            <a href="sign_up_form.php">sign up</a>
        </div><!--login-->
    </div>
        <a href="index.php"><img src="img/triangle.png"></a>
	<div class="form_style">
 			<?php
			 session_start();
				 if (!empty($_GET["i"])&&!empty($_GET["name"]))
				 {
				 	
				 	$_SESSION["i"]=$_GET["i"];

					$_SESSION["name"]=$_GET["name"];
				}?>
		<form class="form_style" method="post" action="sign_in.php">

			<div>Fill the form to sign-in!</div>
	
			<label for="login">Login</label><input name="login" type="text" required="required"/><br />
			<label for="password">Password</label><input name="password" type="password" required="required"/><br />	
	
			<div class="submit">
				<input class="button" type="submit" value="Sign-in" />
				<a class="button" href="forget-password-form.php">forget-passwords</a>
			</div>
		</form>

	</div>

</body>
</html>
