<?php

//  sitemizde alkollü ürünlerin gösterimi vardıreq

//  bu yüzden siteye ilk defa giren birisinden reşit olduğuna ve alkollü ürün tanıtımına dair içerikleri görmeyi istediğine dair onay almalıyız

//  kullanıcı herhangi bir sayfadan siteye girdiğinde eğer onay vermemişse bu onay ekranını görüntülenmeli

//  bir kere onay verdikten sonra ise bir daha hiçbir ekranda bu uyarı çıkmamalı

require_once "init.php";
?>

<ul>
<?php foreach ($alkoller as $key => $alkol): ?>
  <li><a href="alkol.php?id=<?=$key?>"><?=$alkol['isim']?></a></li>
<?php endforeach; ?>
</ul>
<hr>
<a href="onay_kaldir.php">yaş onayını kaldır</a>
