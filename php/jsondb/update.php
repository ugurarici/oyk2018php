<?php
require "data.php";


//  edit.php sayfasından gelen formdaki bilgilerle tüm verilerin bulunduğu diziyi güncelleriz

// var_dump($_POST);


//  posttan gelen bilgiler yakalanır
if(isset($_POST['id']) && isset($articles[$_POST['id']])):

//  tüm verilerin bulunduğu dizide ilgili elemanın içerikleri güncellenir
$articles[$_POST['id']]["title"] = $_POST["title"];
$articles[$_POST['id']]["content"] = $_POST["content"];

//  tüm articleların bulunduğu genel dizi doğru sakalanabilmesi için tekrar json'a çevrilir
$jsonData = json_encode($articles);

//  eldeki yeni json metni kaynak dosyanın üzerine yazılır
file_put_contents("data.json", $jsonData);

//  kullanıcı ana sayfaya yönlendirilir
header("Location: index.php");

else:
  die("Yok böyle bi düzenlenecek şey. Sen de düzen misin?");
endif;
