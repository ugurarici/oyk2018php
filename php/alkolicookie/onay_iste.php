<?php

//  bu sayfada kişiden yaş onayı alacağız, sonraaaaaaaaa ana sayfaya geri göndereceğiz

if(isset($_GET['yanit'])){
  if($_GET['yanit']=="evet"){
    setcookie('yas_onay', '1', time()+10000);
    header("Location: index.php");
    die();
  }
}

?>
<h1>Lütfen erişim onayı verin</h1>
<p>Bu sitede yalnızca 18 yaşını doldurmuş kişilerin görüntüleyebileceği alkollü ürün tanıtımları yapılmaktadır.</p>
<p>Siteyi ziyaret etmek istediğinizi onaylıyor musunuz?</p>
<a href="?yanit=evet">EVET EVET EVEEETTT</a>
-
<a href="?yanit=hyr">hyr cnm</a>
