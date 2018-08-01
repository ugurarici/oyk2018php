<?php

//  veri kaynağımızı json üzerinde tuttuğumuz basit bir listeleme/detay gösterme uygulaması yapacağız

//  bunun için elimizdeki verileri çok katmanlı bir dizide yapılandırılmış halde tutacağız

// array("title" => "başlık", "content" => "içerik");

//  yapılandırılmış veri standartımızdaki çok boyutlu dizimizi json halinde bir dosyada tutacağız

//  uygulamada ihtiyaç duyduğumuz zaman bu dosyadan çekip dizi halinde kullanacağız

//  ana sayfada yalnızca listeleme ve detaya gidilebilmesi için üzerinde bağlantılar olacak

//  detay sayfasında ise ilgili kaydın detayı ve ana sayfaya dön bağlantısı bulunacak

//  ortak veri kaynağına ulaşabilmek için veriyi bize getiren dosyaya bağımlı olduğumuzu belirtiyoruz
require "data.php"; ?>
<ul>
<?php foreach ($articles as $indis => $article) : ?>
    <li>
      <a href="detail.php?id=<?=$indis?>"><?=$article["title"]?></a>
    </li>
<?php  endforeach; ?>
</ul>
<a href="new.php">Yeni Makale</a>
