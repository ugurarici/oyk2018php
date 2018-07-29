<?php

require_once "data.php";

$article = $articles[(int)$_GET['id']];

?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$article['title']?></title>
  </head>
  <body>
    <h1><?=$article['title']?></h1>
    <p>
      <?=$article['content']?>
    </p>
    <a href="index.php">Ana sayfaya dön</a>
  </body>
</html>
