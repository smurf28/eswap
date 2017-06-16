<?php
     session_start();
     $firstname=$_SESSION["loginname"];
     if(!empty($firstname)){
         $login=file("eswap/$firstname/info.txt",FILE_IGNORE_NEW_LINES);
     }
?>
<!DOCTYPE html>
<html>

  <head>
    <title>eSwap-information</title>
    <meta charset="utf-8" />
    <link href="css/detail.css" type="text/css" rel="stylesheet" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
  </head>

<body>
	<div id="up">
        <div id="login">    
            <a href="#">hi,<?=$firstname?></a>|
            <a href="logout.php">logout</a>
        </div><!--login-->

    </div>
       <a id="top_img" href="index.php"><img src="img/triangle.png"></a>

	<div class="form_style">
        <form class="form_style" method="post" action="modify_information_form.php">
    
            <div class="til">Your information</div>
            <hr/><br />

            <div id="infor" class="til">
            <label for="login">LoginName: <?=$firstname?></label><br />
            <label for="mail">Email: <?=$login[2]?></label><br />
            <label for="text">PhoneNumber: <?=$login[3]?></label><br />  
            </div>
            <div class="til">
            <input class="button" type="submit" value="modify" />
            </div>
        </form>

        <form class="form_style" method="get" action="upload_form.php">
    
            <div class="til">Your goods</div>
            <hr/><br />
            <div id="content">
                <?php
                    $arr=glob("eswap/$firstname/goods/*");
                   $firstname=$_SESSION["loginname"];
                    foreach ($arr as $arr => $val) 
                    {
                      $i=basename($val);    
                ?>
                <div class="pic">
                    <a class="thing" href="goods.php?i=<?=$i?>">
                        <img src="eswap/<?=$firstname?>/goods/<?=$i?>/picture/picture1.png" />
                    </a>    
                    <a  class="info" href="delete.php?name=<?=$firstname?>&id=<?=$i?>">
                        <img  src="img/delete.png">
                    </a>
                </div>   
                <?php
                    }
                ?>
            </div><!--content-->
            <div class="til">
            <input class="button" type="submit" value="upload" />
            </div>
        </form>
    </div><!--form_style-->

</body>
</html>