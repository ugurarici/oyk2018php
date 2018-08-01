<?php

//  bu sayfada tüm verilerin bulunduğu dziye ihtiyaç duyduğumuz için data.php dosyasına bağımlıyız
require_once "data.php";

//  formdan post metodu ile gelen title ve content verlerini alıp, data.php içindeki standartlara uygun şekilde yeni bir article dizisi yaratıp bunu tüm verinin bulunduğu kaynağa eklemek istiyoruz

//  formdan gelen veriler kontrol edilir ve yakalanır
if(!isset($_POST['title']) || !isset($_POST['content']))
  die("Gerekli bilgiler gelmedi");

// var_dump($_POST);
//  boş bir article dizisi yaratılır
$newArticle = [];

//  boş article dizisi formdan yakalanan verilerle doldurulur
$newArticle["title"] = $_POST["title"];
$newArticle["content"] = $_POST["content"];

//  yeni article dizisi, tüm articleların bulunduğu genel diziye eklenir
$articles[] = $newArticle;

//  tüm articleların bulunduğu genel dizi doğru sakalanabilmesi için tekrar json'a çevrilir
$jsonData = json_encode($articles);

//  eldeki yeni json metni kaynak dosyanın üzerine yazılır
file_put_contents("data.json", $jsonData);

//  kullanıcı ana sayfaya yönlendirilir
header("Location: index.php");
