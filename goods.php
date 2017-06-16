<!DOCTYPE html>


 <?php
    session_start();
    if ((!empty($_GET["name"]))&&(!empty($_SESSION["loginname"]))) {
        $loginname=$_GET["name"]; 
        $sb=$_SESSION["loginname"];
    }
    elseif((empty($_GET["name"]))&&(!empty($_SESSION["loginname"]))){
        $loginname=$_SESSION["loginname"]; 
        $sb=$loginname;
    }elseif ((!empty($_GET["name"]))&&(empty($_SESSION["loginname"]))) {
      $loginname=$_GET["name"]; 
      $sb=null;
    }       
         $i=$_GET["i"];
         $login=file("eswap/$loginname/goods/$i/inf.txt",FILE_IGNORE_NEW_LINES);
         $login1=file("eswap/$loginname/info.txt",FILE_IGNORE_NEW_LINES);
         $good=$i;
?>
<html>

  <head>
    <title>eSwap-goods</title>
    <meta charset="utf-8" />
    <link href="css/goods.css" type="text/css" rel="stylesheet" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
  </head>

<body>
    <div id="up">
        <?php
        if(empty("$sb"))
        {?>
        <div id="login">    
            <a href="sign_in_form.php?i=<?=$i?>&name=<?=$loginname?>">sign in</a>
        </div>
        <?php
        }
        else {  ?>
           <div id="login">
            <a href="information.php">welcome <?=$sb?></a>|
            <a href="logout.php">logout</a>
        <?php } ?>
            </div>
        
</div>
        <a href="index.php"><img src="img/triangle.png"></a>

    <div class="content">
        <div class="title"><?=$login[0]?>
          <?php
              if($sb==$loginname)
                {
            ?>
                <a href="modify_goods_form.php?name=<?=$loginname?>&i=<?=$i?>">modify</a>
            <?php
                }
            ?>
        </div>
        <div id="th">
          <div id="left">
            <img src="eswap/<?=$loginname?>/goods/<?=$i?>/picture/picture1.png">
            <div class="text">label:<?=$login[2]?></div>
                <div class="text">
                    upload by <?=$loginname?><br/>
                    she want a <?=$login[3]?>.<br/>
                    Tel:<?=$login1[3]?><br/>
                    E-Mail:<?=$login1[2]?><br/>
                    Time:<?=$login[4]?>
                </div>
          </div>

          <div id="right">
              <img  src="eswap/<?=$loginname?>/goods/<?=$i?>/picture/picture2.png">
              <img  src="eswap/<?=$loginname?>/goods/<?=$i?>/picture/picture3.png">
              <div class="describ">
              <div class="text">describe:</div>
              <?=$login[1]?>
              </div>
          </div>
        </div>
        <div id="reply"> 
          <div class="title">Exchange your openion here</div>
          
        <?php
            $array=glob("eswap/$loginname/goods/$good/reply/re*.txt");
            $t=0; 
            foreach($array as $a)
            {
                $review=file("$a");
                $n=count($review);
                $t++;
        ?>
             <div id="column">
                  <!--   <img src="images/<?=$review[1]?>.gif" alt="<?=$review[1]?>" />-->
                   <span > <strong><?=$review[0]?>:</strong><?=$review[1]?></span>
                   <?php
                   if($n>2)
                   {
                    $h=($n-2)/2;
                    for($k=0;$k<$h;$k++)
                        { ?>
                        <span><strong><?=$review[1+2*$k+1]?>:</strong>@<?=$review[0]?>,<?=$review[1+2*$k+2]?></span>
                        <?php  
                        }      
                    }
                    if(!empty("$sb")){
                        ?>
                 <form method="get" action="add_answer.php">
                    <textarea  name="reply" rows="10" cols="95" required="required"></textarea>
                    <input type="hidden" name="renum" value="<?=$t?>" />
                    <input type="hidden" name="good" value="<?=$good?>" />
                    <input type="hidden" name="whose" value="<?=$loginname?>" />
                    <input type="hidden" name="sb" value="<?=$sb?>" />
                    <input class="submit" name="submit" type="submit" value="answer" required="required"/>
                </form>
                <?php
                   }        
                ?>
            </div>
            <?php }
            if(!empty("$sb")){
            ?>
            <form method="get" action="add_reply.php">
              <textarea id="area"name="reply" rows="10" cols="95"required="required" ></textarea>
              <input type="hidden" name="good" value="<?=$good?>" />
              <input type="hidden" name="whose" value="<?=$loginname?>" />
              <input type="hidden" name="sb" value="<?=$sb?>" />
              <input class="sub" name="submit" type="submit" value="add a reply" required="required"/>
            </form>
            <?php
               }
            ?>

        </div><!--reply-->
    </div><!--content-->
</body>
</html>