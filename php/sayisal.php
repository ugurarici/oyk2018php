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


$ok = [
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
  [1, 5, 13, 27, 35, 44],
];


?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sayısal Loto</title>
  </head>
  <body>
    <form method="post">
      <input name="kackolon" placeholder="Kaç kolon oynansın?">
      <button type="submit">OYNA, OYNA KADERİM OYNA</button>
    </form>
    <?php if( count($oynanmisKolonlar)>0 ): ?>
      <hr>
      <?php foreach($oynanmisKolonlar as $oynanmisKolon): ?>
        <div class="kolon">
          <?php foreach($oynanmisKolon as $eleman): ?>
            <span class="tahmin"><?=$eleman?></span>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </body>
</html>
