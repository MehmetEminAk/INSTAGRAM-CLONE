<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="header.css">
    <title>CLONE INSTAGRAM</title>
</head>
<body>
    <?php
    $evvet=$_GET["user"];
    $kullaniciProfil=$_GET["user"] ; 
    
     echo "<div id=\"header\">
     <div class='soldaki'> <a href='GirişSayfası.php?user=$evvet' ><img class='mainIcon' src='images/Instagram.png' alt='intagram icon'/></a> </div>
     <div class='ortadaki'><input class='aramaInput'  type='text'</div>
     <div class='sağdaki'>
     <a href='explore.php'><img class='headerIcon' src='images/ev.png' alt='home'/></a> 
     <a href='explore.php'><img class='headerIcon' src='images/msg.png' alt='home'/></a>
     <a href='explore.php'><img class='headerIcon' src='images/plus.png' alt='home'/></a>
     <a href='explore.php'><img class='headerIcon' src='images/pus.png' alt='home'/></a>
     <a href='explore.php'><img class='headerIcon' src='images/kalp.png' alt='home'/></a>
     <a href='myprofil.php?userid=$kullaniciProfil'>".$evvet."</a>
     <a href='login.php'><img class='headerIcon' src='images/exit.png' alt='home'/></a>
     </div>
     
 </div>
 <hr>

        ";
        
    ?>
  
<div class="sagdakiOneriler">&nbsp<table><tr><td>Sizin için önerilenler</td></tr><tr><td><a href="#">User1</a></td></tr><tr><td><a href="#">User2</a></td></tr><tr><td><a href="#">User3</a></td></tr></table></div>
        <center>
    <div class="postBox"><img class="postImg" src="images/phpicon.png"></div>
    </center>
<div class="solSpace"><p></p></div>
    
</body>
</html>