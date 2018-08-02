<?php

//  php'de veritabanı bağlantı ve sorgu işlemleri için PDO (PHP Data Objects) kullanabiliriz

$connection = new PDO("mysql:host=localhost;dbname=oyk2018_blog;charset=utf8;", "root", "root");

//  veritabanı sunucusuna bir sorgu gönderip yanıt almak için ->query(...) metodunu kullanabiliriz

// $articles = $connection->query("SELECT * FROM articles");
//
// // var_dump($articles);
//
// foreach ($articles as $article) {
//   var_dump($article);
//   die();
// }


//  sadece çalıştırılıp etki ettiği satır adedini integer olarak dönecek sorgular için ->exec(...) metodu kullanılabilir

// $silinenler = $connection->exec("DELETE FROM articles");
// echo $silinenler;

//  bir sorguya değişkenleri parametre olarak göndereceksek doğrudan ->query() ya da ->exec() içine değişkenlerle beraber yazmak yerine, sorguyu hazırlayıp, sonrasında değişkenlerimizle beraber çalıştırılmasını sağlayabiliriz

//  bunun için sorgunun da içinde bulunduğu PDO ifadesini ->prepare(...) ile hazırlayıp, bunu atadığımız değişken (obje) üzerinden de ->execute(...) metoduyla değişkenlerin güvenli bir şekilde sorguya eklenmesini ve veritabanı sunucusu üzerinde çalıştırılmasını sağlayabiliriz

// $silmeSorgusu = $connection->prepare("DELETE FROM articles WHERE id=?");
//
// $silmeSonucu = $silmeSorgusu->execute(array(1));
// //  DELETE FROM articles WHERE id = 1


//  query ile dönen yanıtlar içinden veri alabilmek için yanıtın üzerinde ->fetch() metodu çalıştırılarak gelen satırlardan ilki alınabilir

$sayisiniGetir = $connection->query("SELECT COUNT(id) as satir_sayisi FROM articles");

$sayisiniGetirmeYaniti = $sayisiniGetir->fetch();
// var_dump($sayisiniGetirmeYaniti);

//  bir veri seti döndürüldüyse ->fetchAll() çalıştırılarak tamamı alınabilir

$butunSatirlariSorgula = $connection->query("SELECT * FROM articles ORDER BY id DESC");

while ($satir = $butunSatirlariSorgula->fetch(PDO::FETCH_OBJ)) {
  // var_dump($satir);die();
  echo $satir->title . "<br>";
}







//
