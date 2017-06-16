<!DOCTYPE html>
<html>

  <head>
    <title>eSwap</title>
    <meta charset="utf-8" />
    <link href="css/top.css" type="text/css" rel="stylesheet" />
    <link href="css/main.css" type="text/css" rel="stylesheet" />
  </head>
 
<body>
	<div id="top_banner">
		<div id="up">

        <div id="login">
            <?php
                session_start();
                if(empty($_SESSION["loginname"]))
                {

             ?>
            <a href="sign_in_form.php">sign in</a>|
            <a href="sign_up_form.php">sign up</a>
            <?php
                }
                else{
                        $firstname=$_SESSION["loginname"];
            ?>
            <a href="information.php">Hi,<?=$firstname?> </a>|
            <a href="logout.php">logout</a>
            <?php
                }
            ?>
            

        </div><!--login-->
        <form method="get" action="index.php">
            <div id="search">
                <input name="search" type="text" required="required"/>
                <input class="button" type="submit" value="search" title="search"/>
            </div>
        </form>
		
		</div><!--up-->

        <div id="down">
                <ul class="nav"> 
                     <li><a href="index.php?search=clothes">clothes</a> 
                    </li> 
                    <li><a href="index.php?search=shoes">shoes</a>   
                    </li> 
                    <li><a href="index.php?search=bag">bag</a>    
                    </li> 
                    <li><a href="index.php?search=cosmetics">cosmetics</a>    
                    </li> 
                </ul> 
            <a href="index.php"> <img src="img/triangle.png"></a>
            <div id="downr">
                <ul class="nav"> 
                    <li><a href="index.php?search=jewelry">jewelry</a> 
                    </li> 
                    <li><a href="index.php?search=book">book</a>  
                    </li> 
                    <li><a href="index.php?search=electronics">electronics</a>    
                    </li> 
                    <li><a href="index.php?search=furniture">furniture</a>    
                    </li> 
                </ul> 
            </div><!--downr-->
        </div><!--down-->
	</div><!--top_banner-->

    <div id="content">
        
        <div id="title">Today's Featured Collections
            <a  href="sort.php" >sort by time</a>
        </div>
        <hr/>
        
         <?php
        
            if (!empty($_GET["search"]))
             {
                $search=$_GET["search"];
                $array=glob("eswap/*");
                for($i=0;$i<count($array);$i++)
                {
                    $name=basename($array[$i]);
                    $array1=glob("eswap/$name/goods/*");
                    foreach ($array1 as $array1 => $val) 
                    {
                        $j=basename($val);
                        $thing=file("eswap/$name/goods/$j/inf.txt",FILE_IGNORE_NEW_LINES);                                
                        if($search==$thing[0]||$search==$thing[2])
                        {
                            $information=file("eswap/$name/goods/$j/inf.txt",FILE_IGNORE_NEW_LINES);    
                            #$_SESSION["loginname"]=$name;
         ?>                   
            <a href="goods.php?i=<?=$j?>&name=<?=$name?>"> 
                <img src="eswap/<?=$name?>/goods/<?=$j?>/picture/picture1.png" />
                <div class="info"><br>
                        he wants a <?=$information[3]?></br>
                        time:<?=$information[4]?><br>
                        <strong>by <?=$name?></strong>
                </div>
            </a>
            <?php
                         }     
                    }
                }              
            } else{
                $array=glob("eswap/*");
                $k=0;
                for($i=0;$i<count($array);$i++)
                {
                    $name=basename($array[$i]);
                    $array1=glob("eswap/$name/goods/*");
                    if (count($array1)>0) 
                    {   
                        $k=count($array1);
                        $k--;
                        $j=basename($array1[$k]);
                        $information=file("eswap/$name/goods/$j/inf.txt",FILE_IGNORE_NEW_LINES);             
            ?>

                <a href="goods.php?i=<?=$j?>&name=<?=$name?>"> 
                    <img src="eswap/<?=$name?>/goods/<?=$j?>/picture/picture1.png" />
                    <div class="info"><br>
                        he wants a <?=$information[3]?></br>
                        time:<?=$information[4]?><br>
                        <strong>by <?=$name?></strong>
                    </div>
                </a> 
  
            <?php
             }
                }
                    }
             ?>

        </div><!--content-->
    <div id="bottom">
        <div id="b_left">
            <div class="foot">
                <strong>LOCATION</strong>
                <hr><br>
                92 Weijin Road<br>
                Nankai District,Tianjin,China
            </div>
            <div class="foot">
                <strong>CONTACTS</strong>
                <hr>
                123-456-7890<br>
                swap@tju.cn
            </div>
             <div class="foot">
            <strong>Design By</strong><br>
            <hr>
            -Liu Huilin<br>
            -Pan Hongju<br>
            -Zhang Yang
            </div>
        </div>
        <div id="b_right"></div>
    </div><!--bottom-->
    <div class="copyright"><strong>copyright</strong>:2016 &copy all rights reserved</div>
</body>
</html>