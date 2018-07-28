<?php

//  elimizde öğrencilerin isimleri ve notları bulunacak

//  bunları isme göre düzden ve tersten, nota göre düzden ve tersten sıralayabilmeliyiz

//  herhangi bir seçenek belirtilmediyse nota göre tersten sıralanmalı

//  ek olarak bir bilgi kutusunda en yüksek, en düşük notlar, ortalama not ve standart sapmayı da göstermeliyiz

// include "functions.php";
// include_once "functions.php";
// require "functions.php";
require_once "functions.php";

$notlar = array(
  "Uğur ARICI" => 29,
  "Yusuf GÜLER" => 100,
  "Gizem Ece ÇETİN" => 50,
  "Ayşe DEMİR" => 75,
  "Esra EMİRLİ" => 60,
  "İsmail BULUT" => 86,
  "Kübra ŞAŞI" => 78,
  "Damla BİLGİN" => 82,
  "Emir KURT" => 100,
  "Serhat ÜLGÜ" => 25,
);

if( isset($_GET['sirala']) ){
  switch ($_GET['sirala']) {
    case 'isimaz':
      ksort($notlar);
      break;
    case 'isimza':
      krsort($notlar);
      break;
    case 'not09':
      asort($notlar);
      break;
    case 'not90':
      arsort($notlar);
      break;
    default:
      arsort($notlar);
      break;
  }
} else {
  arsort($notlar);
}

$enDusukNot = min($notlar);
$enYuksekNot = max($notlar);
$ortalamaNot = array_sum($notlar)/count($notlar);
$standartSapma = stats_standard_deviation($notlar);

///
?>
<a href="?sirala=isimaz">İsme Göre A-Z</a> -
<a href="?sirala=isimza">İsme Göre Z-AAA XDé</a> -
<a href="?sirala=not09">Nota Göre 0-9</a> -
<a href="?sirala=not90">Nota Göre 9-0</a>
<hr>
<ul>
  <?php foreach($notlar as $isim => $not): ?>
  <li><?=$isim?> - <?=$not?></li>
  <?php endforeach; ?>
</ul>
<hr>
En Düşük Not: <?=$enDusukNot?><br>
En Yüksek Not: <?=$enYuksekNot?><br>
Ortalama Not: <?=$ortalamaNot?><br>
Standart Sapma: <?=$standartSapma?><br>
