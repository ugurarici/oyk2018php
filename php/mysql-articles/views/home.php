<?php include "header.php" ?>
<h1>Makaleler</h1>
<ul>
  <?php foreach ($articles as $article): ?>
    <li>
      <a href="article.php?id=<?=$article->id?>">
        <?=$article->title?> - <?=$article->okunmaSayisiSoyle()?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
<?php include "footer.php" ?>
