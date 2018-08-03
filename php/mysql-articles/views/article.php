<?php include "header.php"?>
<h1><?=$article->title?></h1>
<h2><?=$article->subtitle?></h2>
<p><?=$article->summary?></p>
<p><?=$article->content?></p>
<hr>
<p><?=$article->okunmaSayisiSoyle();?></p>
<hr>
<a href="index.php">Listeye dön</a>
<?php if (isset($_SESSION['is_admin'])): ?>
	<?php if ($_SESSION['is_admin']): ?>
		<a href="delete.php?id=<?=$article->id?>">Sil</a>
	<?php endif?>
<?php endif?>
<?php include "footer.php"?>
