<?php

require_once "init.php";
$alkol = $alkoller[$_GET['id']];
?>
<h1><?=$alkol['isim']?></h1>
<img src="<?=$alkol['gorsel']?>" width="200">
<p><?=$alkol['aciklama']?></p>
<h3><?=$alkol['fiyat']?></h3>
<a href="index.php">Ana sayfaya dön</a>
