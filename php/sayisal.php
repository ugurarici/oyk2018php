<?php

//  kaç kolon oynanacağını bilmeliyim

//  bu kadar adet oynanmış kolon üretmeliyim

//  bunların her birini kendi içinde küçükten büyüğe sıralanmış şekilde göstermeliyim

$oynanacakKolonSayisi = 5;
$oynanmisKolonlar = [];

function kolonYarat()
{
  $kolon = [];
  do {
    $yeniEleman = rand(1,49);
    if( ! in_array($yeniEleman, $kolon) ) $kolon[] = $yeniEleman;
  } while (count($kolon)<6);
  sort($kolon);
  return $kolon;
}

if(isset($_POST['kackolon'])){
  $oynanacakKolonSayisi = (int)$_POST['kackolon'];
  for ($i=0; $i < $oynanacakKolonSayisi; $i++) {
    $oynanmisKolonlar[] = kolonYarat();
  }
}


// $kullanicininOynadigiKolon = kolonYarat();
// $gercekSonuclar = kolonYarat();
$kullanicininOynadigiKolon = [1, 7, 13, 24, 38, 43];
$gercekSonuclar = kolonYarat();

// $bilinen = [];
// foreach ($kullanicininOynadigiKolon as $eleman) {
//   if(in_array($eleman, $gercekSonuclar)) $bilinen[] = $eleman;
// }
//
// foreach ($oynanmisKolonlar as $oynanmisKolon) {
//   $bilinen = array_intersect($oynanmisKolon, $gercekSonuclar);
//   echo count($bilinen);
//   echo "<pre>";
//   var_dump($bilinen);
//   echo "</pre>";
//   echo "<hr>";
// }

?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sayısal Loto</title>
    <style media="screen">
      body{
        font-family: sans-serif;
        width: 100vw;
        min-height: 100vh;
        margin:0;
        padding: 0;
        background-image: url('sayisal.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
      }
      .container{
        margin-top: 40px;
        margin-bottom: 40px;
        padding: 20px;
        text-align: center;
        background-color: rgba(0,0,0,.6);
        border-radius: 20px;
        width: 70%;
        /* min-height: 200px; */
      }
      .kolon{
        display: flex;
        align-items: stretch;
        justify-content: space-around;
        padding: 15px 0;
        border-top: 1px dotted rgba(255,255,255,.5);
      }
      .kolon .tahmin{
        color: black;
        border-radius: 50%;
        background: pink;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .kolon .tahmin.dogru{
        background-color: lightgreen;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <form method="post">
      <input name="kackolon" placeholder="Kaç kolon oynansın?">
      <button type="submit">OYNA, OYNA KADERİM OYNA</button>
    </form>
    <?php if( count($oynanmisKolonlar)>0 ): ?>
      <h1>Talihli Numaralar</h1>
      <div class="kolon">
        <?php foreach($gercekSonuclar as $eleman): ?>
          <span class="tahmin dogru"><?=$eleman?></span>
        <?php endforeach; ?>
      </div>
      <h2>Oynanmış Kolonlar</h2>
      <?php foreach($oynanmisKolonlar as $oynanmisKolon): ?>
        <div class="kolon">
          <?php foreach($oynanmisKolon as $eleman): ?>
            <span class="tahmin <?php echo in_array($eleman, $gercekSonuclar) ? "dogru" : "";?>"><?=$eleman?></span>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
    </div>
  </body>
</html>
