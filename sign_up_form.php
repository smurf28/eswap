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
            <a href="sign_in_form.php">sign in</a>
        </div><!--login-->
    </div>
        <a href="index.php"><img src="img/triangle.png"></a>
	<div class="form_style">
 
		<form class="form_style" method="post" action="sign_up.php">
	
			<div>Fill the form to sign-up!</div>
	
			<label for="login">Login</label><input name="login" type="text" required="required"/><br />
			<label for="password">Password</label><input name="password" type="password" required="required"/><br />
			<label for="email">Email</label><input name="email" type="text" required="required" /></br>
			<label for="phonenumber">PhoneNumber</label><input name="phonenumber" type="text" required="required" /></br>

	
			
			<div class="submit">
				<input class="button" type="submit" value="Sign-up" />
			</div>
		</form>
		
	</div>

</body>
</html>
