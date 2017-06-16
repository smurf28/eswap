<!DOCTYPE html>
<html>

  <head>
    <title>eSwap-modify</title>
    <meta charset="utf-8" />
    <link href="css/form.css" type="text/css" rel="stylesheet" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
  </head>
<?php
     session_start();
     $firstname=$_SESSION["loginname"];
     if(!empty($firstname)){
         $login=file("eswap/$firstname/info.txt",FILE_IGNORE_NEW_LINES);
     }
?>
<body>
	<div id="up">
        <div id="login">    
            <a href="#">hi,<?=$firstname?></a>
        </div><!--login-->
    </div>
        <a href="index.php"><img src="img/triangle.png"></a>

	<div class="form_style">
        <form class="form_style" method="post" action="modify_information.php">
    
            <div>Modify your information</div>

            <label for="password">Password</label><input name="password" type="text" value="<?=$login[0]?>"/><br />
            <label for="email">Email</label><input name="email" type="text" value="<?=$login[2]?>"/><br />  
            <label for="phonenumber">PhoneNumber</label><input name="phonenumber" type="text" value="<?=$login[3]?>"/><br /> 
            <input name="loginname" type="hidden" value="<?=$firstname?>"/><br /> 
    
            <div class="submit">
                <input class="button" type="submit" value="save" />
            </div>
        </form>
    </div><!--form_style-->

</body>
</html>