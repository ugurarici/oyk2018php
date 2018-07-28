<?php

//  Boolean - true-false
//  NULL
//  integer - tam sayılar
//  float   - ondalık sayılar
//  string  - metin
//  array   - dizi
//  object  - nesne
//  resource  - kaynak (dış kaynaklar, MySQL'den alınan yanıt gibi)
//  iterator

$ogrenciMi = true;
$maas = null;
$yas = 19;
$kardesininYasi = 3.5;
$isim = "Zihni YAKAR";
$hobileri = array('kitap okumak', 'sinema');

echo $isim;

echo "<hr>";

$isim = "Uğur ARICI";

echo $isim;
echo "<hr>";

var_dump($hobileri);
echo "<hr>";

$toplam = 1+2;
echo $toplam;
echo "<hr>";

echo ++$toplam;
echo "<hr>";

echo $toplam;
echo "<hr>";


// $sacmaBirToplam = "biz 4 kişiydik gardaşşşşş!"+5;
// echo $sacmaBirToplam;
// echo "<hr>";


/////////////

$meyveler = array('karpuz', 'erik', 'çilek', 'muz', "kiraz");
var_dump($meyveler);

echo "<hr>";

$sebzeler = ['pırasa', 'brokoli', 'ıspanak', 'fasulye'];

echo $sebzeler[1];

$sebzeler[] = "kereviz";

var_dump($sebzeler);
