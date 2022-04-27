
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Login.css"/>
    <title>Login</title>
</head>
<body>
    <?php
    
    if($_GET["giris"] && isset($_POST["loginmail"])==1 && isset($_POST["loginsifre"])==1){
        $userName=$_POST["loginmail"];
        $userPass=md5($_POST["loginsifre"]);
        $query="SELECT MAIL,SIFRE,AD from uyeler where MAIL='$userName'";
        
        $con=mysqli_connect("localhost","root","","aksoft");
        $result1=mysqli_query($con,$query);
        
        foreach($result1 as $gezici){
            $kullaniciAdi=$gezici;

        }
        $kullaniciiAdi=$kullaniciAdi["AD"];

        
        echo '<nav class="navbar navbar-inverse">
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
      <a  href="tel:+90 537 253 9302"><img margin-right="300px" float="right" style="width: 30px;float:right;position:fixed;height: 30px;"src="images/icons8_phone_80px.png"></a>

      <div align="center">
              <p>Giriş Yapmak için Formu Doldurun</p>
              <form action="login.php?giris=1" method="post">
                  <input type="mail" class="" name="loginmail" placeholder="Mail Adresiniz"/> <br>
                  <input type="password" name="loginsifre" placeholder="Şifre"/> <br><br><br>
                  <input type="submit" class="btn btn-primary" value="Giriş Yap"/><br><br><br><br>
            
              </form><br>
              
          <a href="sign-up.php">Üye Değil misiniz! Olmak için tıklayın</a><br>'
          ?>
          <?php 
                if($kullaniciAdi["MAIL"]==$userName && $kullaniciAdi["SIFRE"]==$userPass){
                    echo "<p>GİRİŞ BAŞARILI HOŞGELDİNİZ</p>
                    <a href='GirişSayfası.php?user=$kullaniciiAdi' >Giriş Yaptınız bu linke tıklayarak sayfanıza gidin</a>";

                }
                else{
                    echo "<center>
                    E-posta adresi veya şifre hatalı lütfen daha sonra tekrar deneyiniz<br>
                    <a href='sifirla.php'>Şifrenizi hatırlamıyor musunuz? Sıfırlamak için tıklayın</a>
                     </center>";
                    
                }
          ?>
        <?php
          echo '</div>
          <br><br><br>
          <br>
          <div class="gorusFormu">
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
      <br><br>';
    }
    else{
        echo '<nav class="navbar navbar-inverse">
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
      <a  href="tel:+90 537 253 9302"><img margin-right="300px" float="right" style="width: 30px;float:right;position:fixed;height: 30px;"src="images/icons8_phone_80px.png"></a>

      <div align="center">
              <p>Giriş Yapmak için Formu Doldurun</p>
              <form action="login.php?giris=1" method="post">
                  <input type="mail" class="" name="loginmail" placeholder="Mail Adresiniz"/> <br>
                  <input type="password" name="loginsifre" placeholder="Şifre"/> <br><br><br>
                  <input type="submit" class="btn btn-primary" value="Giriş Yap"/><br><br><br><br>
            
              </form>
          <a href="sign-up.php">Üye Değil misiniz! Olmak için tıklayın</a>
          </div>
          <br><br><br>
          <br>
          <div class="gorusFormu">
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
      <br><br>';
    }
    ?>



</div>

</body>
</html>