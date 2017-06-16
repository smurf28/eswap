<!DOCTYPE html>
<html>
<?php
session_start();
$sb= $_SESSION["loginname"];
#$sb=1;
?>
  <head>
    <title>eSwap-upload</title>
    <meta charset="utf-8" />
    <link href="css/detail.css" type="text/css" rel="stylesheet" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
  </head>

<body>
	<div id="up">
        <div id="login">    
            <a href="information.php">hi,<?=$sb?></a>
        </div><!--login-->
    </div>
        <a id="top_img" href="index.php"><img src="img/triangle.png"></a>

    <div class="form_style">
        <form class="form_style" method="post" action="upload.php" enctype="multipart/form-data">

            <label for="title">Title </label>
            <input name="title" type="text" required="required"/><br />
            <label for="discrib">Describe the things you want to exchang</label><br />
            <textarea name="discrib" type="text" required="required"></textarea><br /> 
            <label for="picture1">Picture 1</label><input class="picture" name="picture1" type="file" required="required"/><br />
            <label for="picture2">Picture 2</label><input class="picture" name="picture2" type="file" required="required"/><br />
            <label for="picture2">Picture 3</label><input class="picture" name="picture3" type="file" required="required"/><br />
            <label for="title">Please classify your goods</label>
            <select name="classify1">
                <option selected="selected">clothes</option>
                <option>furniture</option>
                <option>shoes</option>
                <option>jewelry</option>
                <option>bag</option>
                <option>Cosmetics</option>
                <option>book</option>
                <option>electronics</option>
            </select>
            
            <br />
         <label for="title">which thing do you want to swap? </label>
        <input name="title2" type="text" required="required"/>
        <div class="til">
            <input class="button" name="submit" type="submit" value="Submit" />
        </div>
        </form>
    </div>

</body>
</html>