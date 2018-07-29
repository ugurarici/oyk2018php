<?php include "header.php"; ?>
<h1>Sonuç</h1>
Toplam süre: <?=$result['total_time']?> sn<br>
Toplam girilen kelime: <?=$result['total_words'];?><br>
Kelime başına kullanılan saniye: <?=$result['avg_time_for_one_word']?><br>
Oyunun sonlanma nedeni: <?=$result['end_cause']?><br>
<a href="?action=reset">Başa dön</a>
<?php include "footer.php"; ?>
