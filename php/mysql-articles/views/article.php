<?php include "header.php" ?>
<h1><?=$article->title?></h1>
<h2><?=$article->subtitle?></h2>
<p><?=$article->summary?></p>
<p><?=$article->content?></p>
<hr>
<a href="index.php">Listeye dön</a>
<a href="delete.php?id=<?=$article->id?>">Sil</a>
<?php include "footer.php" ?>
