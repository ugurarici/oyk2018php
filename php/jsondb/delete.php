<?php

require_once "init.php";

//  adres çubuğundan gelen id parametresini alıp bu indisli elemanı tüm verilerin bulunduğu diziden kaldıracağız

//  yönetici değilse burada işi yok
redirectToLoginIfNotAdmin();

//  id parametresi dolu mu ve böyle bir eleman tüm verilerin bulunduğu dizide var mı diye bakarız

if(isset($_GET['id']) && isset($articles[$_GET['id']])):

//  tüm verilerin bulunduğu diziden bu indise sahip elemanı sileriz
unset($articles[$_GET['id']]);

//  tüm articleların bulunduğu genel dizi doğru sakalanabilmesi için tekrar json'a çevrilir
$jsonData = json_encode($articles);

//  eldeki yeni json metni kaynak dosyanın üzerine yazılır
file_put_contents("data.json", $jsonData);

//  kullanıcı ana sayfaya yönlendirilir
header("Location: index.php");

else:
  echo "Yanlış bilgi girişi yapılmış.";
endif;
