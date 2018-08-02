<?php

require_once "init.php";

//  bu sayfada sabit bilgiler ile yönetici girişi yapılmasını sağlayacağız

//  bir formdan kullanıcı adı ve parola kaldıracağız

//  bunların bizim elimizdeki ön tanımlı bilgilerle eşleşmesi durumunda oturum verisine is_admin değerini true olarak atayacağız

//  site içindeki diğer işlemler buna dayalı olarak yapılacak

//  giriş için gerekli bilgileri önden tanımlayalım
$adminUsername = "admin";
$adminPasswordHash = "8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92"; //"123456";

//   formdan gelen bilgiler ön tanımlı verilerle örtüşüyor mu diye bakalım
if(isset($_POST['username']) && isset($_POST['password'])){
  if($_POST['username']==$adminUsername && hash("sha256",$_POST['password'])==$adminPasswordHash){
    //  kullanıcının girdiği bilgiler bizimkilerle uyuşuyor, giriş yaptırıp ana sayfaya yönlendirebiliriz
    $_SESSION['is_admin'] = true;
    header("Location: index.php");
    die();
  }else{
    echo "Kullanıcı adı ve parola eşleşmiyor. Böyle bir yönetici yok. SEN DE YÖNETİCİ MİSİN????<hr>";
  }
}


?>
<form action="login.php" method="post">
  Kullanıcı Adı: <input type="text" name="username"><br>
  Parola: <input type="password" name="password"><br>
  <button type="submit">Giriş yap</button><br>
  <a href="index.php">ana sayfaya dön</a>
</form>
