<?php

//  adres çubuğunda id isimli parametre ile gönderilen indise sahip dizi elemanının detaylarını ekranda göstereceğiz

//  detayın altında da ana sayfaya dön bağlantısı gözükmeli

require_once "init.php";

if(isset($_GET["id"]) && isset($articles[$_GET["id"]])):
  $article = $articles[$_GET["id"]];
else:
  die("böyle bir article yok. sen de article mısın?");
endif;

// var_dump($article);
?>
<h1><?php echo $article["title"]; ?></h1>
<p><?php echo $article["content"]; ?></p>
<a href="index.php">ana sayfaya dön</a>
<?php if(isset($_SESSION['is_admin'])): ?> -
<a href="edit.php?id=<?=$_GET['id']?>">Düzenle</a> -
<a href="delete.php?id=<?=$_GET['id']?>" onclick="return confirm('Gerçten de silinsin mi?')">sil</a>
<?php endif; ?>
