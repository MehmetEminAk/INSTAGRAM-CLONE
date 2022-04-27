<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Login.css"/>
    <link rel="stylesheet" href="productsTable.css">
    <title>Products</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AKSOFTWARE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="login.php">Home</a></li>
      <li><a href="#iletisim">İletisim</a></li>
      <li><a href="sign-up.php">Kayıt Ol!</a></li>
      <li><a href="login.php">Giriş Yap</a></li>
      
    </ul>
  </div>
</nav>

<table align="center" >
    <?php  
    for($i=0;$i<5;$i++){

        echo "<tr>
        <td>
            <div class=\"interaktifBox\">
                <img  class=\"resim\" src=\"vazo.jpg\" alt=\"productName\"/>
            </div>
            
        </td>
        
        <td>
        <div class=\"staticBox\">
        </div>
        </td>

        <td>
            <div class=\"interaktifBox\">
            <img class=\"resim\" src=\"vazo.jpg\" alt=\"productName\"/>
            </div>
        </td>
        
        <td>
        <div class=\"staticBox\">
        </div>
        </td>
        
        <td>
            <div class=\"interaktifBox\">
            <img class=\"resim\" src=\"vazo.jpg\" alt=\"productName\"/>
            </div>
            
        </td>
    </tr>";
    }
    
    ?>
<h3 id="iletisim">İletişim</h3><br>
<p>Görüş,öneri ve fikirlerinizi bu forum aracılığıyla bize bildirebilirsiniz</p>
<form action="login.php" method="post">
    <table>
        <tr>
            <td>ADINIZ VE SOYADINIZ:</td>
            <td><input type="text" name="gorusAdi"></td>
        </tr>
        <tr>
            <td>EMAİL ADRESİNİZ:</td>
            <td><input type="mail" name="gorusMail"></td>
        </tr>
        <tr>
            <td>Görüş ve Önerileriniz:</td>
            <td>                      </td>
        </tr>
        <tr>
            <div>
            <td>                  </td>
            </div>
        
            <div class="gorusBox">
            <td><textarea name="fikirler"></textarea></td>
            </div>
        </tr>
        
        <tr>
            <td>                                 </td>
            <td><input type="submit" value="Gönder" name="gorus" class="btn btn-info btn-lg" ></td>
        </tr>
    </table>

</form>
<?php
    static $bultendekilerinSayisi=0;
      if(isset($_GET["bultenKayitOl"]) && isset($_POST["bultenKayitMail"]))   
        if(strpos($_POST["bultenKayitMail"],"gmail.com")>0 || strpos($_POST["bultenKayitMail"],"hotmail.com")>0 || strpos($_POST["bultenKayitMail"],"yahoo.com")>0 || strpos($_POST["bultenKayitMail"],"icloud.com")>0 || strpos($_POST["bultenKayitMail"],"yandex.com")>0 ){
          $a=fopen("bultenKayitOl.txt","a+");
          $bultendekilerinSayisi++;
          fprintf($a,"%s\n",$_POST["bultenKayitMail"]);
          
        }
        else{
          echo "<script>document.getElementById('hataMesaji').style='visibility:visible'</script>";
        }
      
      
      
      
      else{
        echo "
            <div align=\"center\">
            <form action='aksoft.php?bultenKayitOl=true' method=\"post\" >
            <p name=\"bultenYazi\">Üye olmak istemiyor musunuz sadece mail bültenimize üye olmak için mail adresinizi girin $bultendekilerinSayisi kişinin arasına sizde katılın</p><br>
            <input type=\"text\" name=\"bultenKayitMail\" />
            <input type=\"submit\" value=\"Gönder\" \"></input> 
          </form><br><div id=\"hataMesajı\" class=\"errBultenKayit\"><p>Yanlış  bir eposta girdiniz!</p></div>";
          
            
      }
    ?>
<br><br>
</body>
</html>
<?php



?>