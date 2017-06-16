<!DOCTYPE html>
<html>

  <head>
    <title>eSwap-modify</title>
    <meta charset="utf-8" />
    <link href="css/detail.css" type="text/css" rel="stylesheet" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
  </head>
<?php
     $firstname=$_GET["name"];
     $i=$_GET["i"];
     if(!empty($firstname)){
         $login=file("eswap/$firstname/goods/$i/inf.txt",FILE_IGNORE_NEW_LINES);
         #$login1=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);
     }
?>
<body>
	<div id="up">
        <div id="login">    
            <a href="information.php">hi,<?=$firstname?></a>
        </div><!--login-->
    </div>
        <a id="top_img" href="index.php"><img src="img/triangle.png"></a>

	<div class="form_style">
           <div id="title">Modify your information</div>
        <form class="form_style" method="post" action="modify_goods.php">
            <label for="title">Title </label>
            <input name="title" type="text"  value="<?=$login[0]?>"/><br />
            
            <label for="describe">Describe the things you want to exchang</label><br />
            <textarea name="describe" type="text"><?=$login[1]?></textarea>
            
            <label for="title">Please classify your goods</label>
            <select name="classify">
                <option selected="selected">clothes</option>
                <option>furniture</option>
                <option>shoes</option>
                <option>jewelry</option>
                <option>bag</option>
                <option>cosmetics</option>
                <option>book</option>
                <option>electronics</option>
            </select>
             <br />
            <label for="want">which thing do you want to swap? </label>
            <input name="want" type="text" required="required" value="<?=$login[3]?>"/>
            
            <input name="loginname" type="hidden" value="<?=$firstname?>"/><br /> 
            <input name="i" type="hidden" value="<?=$i?>"/>
			 <input name="time" type="hidden" value="<?=$login[4]?>"/>
            
            <div class="til">
            <input class="button" name="submit" type="submit" value="save" />
            </div>
        </form>
    </div><!--form_style-->

</body>
</html>