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
 
		<form class="form_style" method="post" action="modify-password.php">

			<div>Please rewrite your password </div>
	
			<label for="loginname">LoginName</label><input name="loginname" type="text" required="required"/><br />
			<label for="password">Password</label><input name="password" type="password" required="required"/><br />
			<label for="confirmation">Again Password</label><input name="confirmation" type="password" required="required"/><br />	
			<div class="submit">
				<input class="button" type="submit" value="Submit" />
			</div>
		</form>

	</div>

</body>
</html>
