<?php

//  makalelerim var

//  her birinin başlığını tıklanabilir şekilde listelemek istiyorum

require_once "data.php";

?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Makaleler</title>
  </head>
  <body>
    <ul>
      <?php foreach($articles as $key => $article): ?>
      <li>
        <a href="detail.php?id=<?=$key?>">
        <?=$article['title']?>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
