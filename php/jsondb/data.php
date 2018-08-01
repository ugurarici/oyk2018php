<?php

// $articles = array(
//   ["title" => "Başlık", "content" => "içerik"],
//   ["title" => "Başlık 2", "content" => "içerik 2"],
//   ["title" => "Başlık 3", "content" => "içerik 3"],
// );

//   elimizdeki veriyi json'a çeviririz
// $dataJson = json_encode($articles);
//  json verimizi data.json isimli dosyaya yazarız
// file_put_contents("data.json", $dataJson);
//  bir kere bunu çalıştırdıktan sonra bundan sonraki her çalıştırmada

//  data.json isimli dosyanın içeriğini okuruz
$jsonData = file_get_contents("data.json");
//  elde ettiğimiz json verisini PHP dizisine çevirir ve $articles adıyla tanımlarız
$articles = json_decode($jsonData, true);
