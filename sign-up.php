<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sign-up.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MR SOFTWARE ENGİNEER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#iletisim">İletisim</a></li>
      <li><a href="sign-up.php">Kayıt Ol!</a></li>
      <li><a href="login.php">Giriş Yap</a></li>
    </ul>
  </div>
</nav>
    
    
    
    
<?php 
     if($_GET["kayit"]==1){
      $hangibilgisayar="localhost";
  $kullanıcı="root";
  $pass="";
  $baglanmakisteneveritabani="aksoft";
  $girilenMail=$_POST["mail"];
  $girilenAd=$_POST["ad"];
  $girilenSoyad=$_POST["soyad"];
  $girilenMeslek=$_POST["meslek"];
  $dosya=mysqli_connect($hangibilgisayar,$kullanıcı,$pass,$baglanmakisteneveritabani);
  $isMemberQuery="SELECT MAIL  FROM  uyeler where MAIL LIKE \"$girilenMail\"";
  $isMember=mysqli_query($dosya,$isMemberQuery);
  $vtMail="";
  $IsMember=$isMember->fetch_array();
//   foreach($IsMember as $gezici){
//       $vtMail=$gezici;
//   }
  print_r($IsMember);
  if($IsMember != null){
  
      echo "
          <div>
      <div id='errMsg'  class='alert alert-danger'>
          <strong>Uyarı!</strong> E-mail adresi daha önce sisteme kayıt olmuş.\n;
          Kayıt başarısız  :(\n
          </div>
      </div><br>
          
          
      
      ";
      
      
  }
  else{
      
      if(strpos($_POST["mail"],"@gmail.com")>0 || strpos($_POST["mail"],"@hotmail.com")>0 || strpos($_POST["mail"],"@yahoo.com")>0 || strpos($_POST["mail"],"@icloud.com")>0 || strpos($_POST["mail"],"@outlook.com")>0){
          
        
          $girilenSifre=md5($_POST['sifre']);
          $sorgu="INSERT INTO uyeler VALUES (\"$girilenAd\",\"$girilenSoyad\",\"$girilenMeslek\",\"$girilenMail\",\"$girilenSifre\")";

          mysqli_query($dosya,$sorgu);
          
          
          echo "<div>
          <div id='errMsg'  class='alert alert-success'>
          <strong>Uyarı!</strong> Kaydınız başarıyla gerçekleşti hoşgeldinizz :) .\n;
          
          </div>
          </div>
          <br>";
          
          
      }
      else{
          echo "<div>
      <div id='errMsg'  class='alert alert-danger'>
          <strong>Uyarı!</strong>Lütfen geçerli bir mail adresi giriniz.\n;
          
      </div>
      </div><br>
      ";
      }
      
      
  }
  }
  else{
    echo '<br><br><br><br><br><br><br><br><br>
    <div align="center">
        <p>Üye olmak için formu doldurun</p>
        <form action="sign-up.php?kayit=1" method="post">
            <input type="text"  name="ad" placeholder="Adınız" required/> <br>
            <input type="text" name="soyad" placeholder="Soyadınız" required   /> <br>
            <input type="text" name="meslek" placeholder="Mesleğiniz" required   /> <br>
            <input type="mail" class="" name="mail" placeholder="Mail Adresiniz" required/> <br>
            <input type="password" name="sifre" placeholder="Şifre" required   /> <br><br><br>
            <input type="submit" class="btn btn-primary" value="Üye Ol"/><br><br><br><br>
        
        
    <a href="login.php">Zaten üye misiniz tıklayın</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>';
  }
 ?>
<br>
</body>
</html>
