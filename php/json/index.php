<?php

//  PHP'de elimizdeki verileri JSON formatında işaretlenmiş hale getirmek ve JSON verileri PHP değişkenlerine dönüştürmek çok kolaydır

//  öncelikle JSON'ı anladığınızdan emin olmak adına lütfen ziyaret edin: json.org

//  PHP'deki bir veriyi JSON'a çevirmek için
//  json_encode($php_degiskeni);

//  aynı şekilde bir JSON veriyi PHP değişkeni olarak döndürmek için
//  json_decode($json_string);

//  json_decode(...) fonksiyonu okuduğu JSON veriyi obje tipinde döndürür, dizi ile çalışmamızın daha rahat olacağı durumlarda ikinci parametre olarak true gönderebiliriz

$meyveler = array("elma", "armut");
$meyvelerJson = json_encode($meyveler); // ["elma","armut"]
// echo $meyvelerJson;

$kalabalikMeyveler = array(
  array("isim"=>"elma 🍏"),
  array("isim"=>"armut 🍐"),
  array("isim"=>"çilek 🍓"),
  array("isim"=>"ŞEFTALİ 🍑❤️"),
  array("isim"=>"erik "),
  array("isim"=>"nektarin"),
  array("isim"=>"kavun 🍈"),
  array("isim"=>"KARPUZ 🍉"),
);
$kMeyvelerJson = json_encode($kalabalikMeyveler);
// echo $kMeyvelerJson;

$jsonString = '[{"isim":"elma \ud83c\udf4f"},{"isim":"armut \ud83c\udf50"},{"isim":"\u00e7ilek \ud83c\udf53"},{"isim":"\u015eEFTAL\u0130 \ud83c\udf51\u2764\ufe0f"},{"isim":"erik "},{"isim":"nektarin"},{"isim":"kavun \ud83c\udf48"},{"isim":"KARPUZ \ud83c\udf49"}]';

$geriDonus = json_decode($jsonString, true);

echo "<pre>";
var_dump($geriDonus);

//
