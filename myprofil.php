<?php
        $profil=$_GET["userid"];
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="header.css">

    <title><?php echo $profil ?></title>
    <style>
.profilImage{
    width: 300px;

    height: 300px;

    border-radius: 150px;

    -webkit-border-radius: 150px;

    -moz-border-radius: 150px;
    margin-left:400px;
}

</style>
</head>
<body>
<?php
    
    if($_GET["duzenle"]==1 && $_GET["user"]==$profil){
        include_once("header.php");
       echo " <form action=\"myprofil.php?userid=$profil&duzenle=1\" method=\"post\" enctype=\"multipart/form-data\">
        Yüklenecek dosyayı seçin:
        <input type=\"file\" name=\"dosya\" />
        <input type=\"submit\" value=\"Yükle\" />
    </form>";

    }
    else {

    
     include_once("header.php");
        
    

        $connect=mysqli_connect("localhost","root","","aksoft");
        
        $sorgu=mysqli_query($connect,"SELECT MAIL FROM uyeler WHERE AD='$profil'");
        foreach($sorgu as $gezici){
            $mailler=$gezici;
        }
        $userMail=$mailler["MAIL"];
        $sorgu2=mysqli_query($connect,"SELECT IMG_PATH FROM images WHERE MAIL='$userMail'");
        foreach($sorgu2 as $gezer){
            $imagepaths=$gezer;
        }
        $kullanıcıProfilResmi=$imagepaths["IMG_PATH"];
        
         

    }
    ?>


<br><br><div>
<?php echo "<img class='profilImage' src=\"$kullanıcıProfilResmi\" alt=\"Your Profile Image\" />  
 $profil 
 <input type=\"button\"  class=\"btn btn-primary\" value='Profili Düzenle'></input>

" ;
?>

</body>
</html>
