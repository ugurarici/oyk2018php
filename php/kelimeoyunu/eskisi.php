<?php
setlocale(LC_ALL, 'tr_TR.UTF-8');
//  sabit bir kelime değişkeni tanımlarız

//  sayfamızda bu kelimenin son harfi ile başlayan bir kelime girilmesini istediğimizi belirttiğimiz bir form oluştururuz

//  bu form üzerinden POST edilen kelimeyi alırız

//  gelen kelimenin ilk harfi ile daha önceden tanımlı kelimenin son harfi birbirine eşit mi diye bakarız

//  tüm kodlar bu dosyada bulunmalı, yani normalde form görünüyorken, form üzerinden bir şey POST edildiğinde ilgili alan çalışmalı

//  kelimelerin büyük küçük harf farklılığını hesaba katarak her durumda çalışmasını sağlamalıyız

//  kelimemizi tanımlayalım

function tr_strtolower($text)
{
    $search=array("Ç","İ","I","Ğ","Ö","Ş","Ü");
    $replace=array("ç","i","ı","ğ","ö","ş","ü");
    $text=str_replace($search,$replace,$text);
    $text=mb_strtolower($text, "UTF-8");
    return $text;
}

$kelime = "araba";

//  formumuz post edildiğinde kontrolleri yapalım
if(isset($_POST['gelenKelime']) && isset($_POST['mevcutKelime'])){
  $mevcutKelime = $_POST['mevcutKelime'];
  $eldekiKelimeninSonHarfi = mb_substr(tr_strtolower($mevcutKelime, "utf8"), -1);
  $gelenKelime = $_POST['gelenKelime'];
  // $gelenKelimeninIlkHarfi = $gelenKelime[0];
  $gelenKelimeninIlkHarfi = mb_substr(tr_strtolower($gelenKelime, "utf8"), 0, 1);
  if($eldekiKelimeninSonHarfi==$gelenKelimeninIlkHarfi){
    $sonuc = true;
    $kelime = $gelenKelime;
  } else {
    $sonuc = false;
  }
}


//
?>
<strong><?=$kelime?></strong><br>
<small>Yukarıdaki kelimenin son harfi ile başlayan bir kelime girin</small><br>
<form method="post">
  <input type="hidden" name="mevcutKelime" value="<?=$kelime?>">
  <input type="text" name="gelenKelime" autofocus>
  <button type="submit">Oyna</button>
</form>
<?php if(isset($sonuc)): ?>
  <hr>
  <?php echo $sonuc ? "Başarılı" : "Başarısız"; ?>
<?php endif; ?>



<!-- -->
