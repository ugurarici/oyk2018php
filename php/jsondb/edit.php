<?php

require_once "init.php";

//  bu sayfada belirtilen kaydın düzenlenebilmesi için bir form göstereceğiz

//  yönetici değilse burada işi yok
redirectToLoginIfNotAdmin();

//  sayfa ilk açıdığında formun içinde kayda dair mevcut bilgiler görüntülenmeli

//  düzenlenmek istenen kaydın bilgilerine erişim sağlarız

if(isset($_GET["id"]) && isset($articles[$_GET["id"]])):
  $article = $articles[$_GET["id"]];
else:
  die("böyle bir article yok. sen de article mısın?");
endif;

//  bu kayda ait bilgileri düzenleme formunda gösterir ve güncelleme sayfasına gönderilmeyi bekler hale getiririz

///
?>
<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?=$_GET['id']?>">
  Başlık: <input type="text" name="title" value="<?=$article['title']?>"><br>
  İçerik: <br>
  <textarea name="content"><?=$article['content']?></textarea>
  <br>
  <button type="submit">Düzenle</button>
</form>
