<?php

require_once "init.php";
if (!isset($_SESSION['is_admin'])) {
    header("Location: index.php");
    die();
}

if (isset($_GET['id'])) {
    $article = $connection->prepare("DELETE FROM articles WHERE id = ?");
    $article->execute(array($_GET['id']));
    $result = $article->rowCount();
} else {
    $result = false;
}
?>

<h3>
  <?php if ($result): ?>
    Kayıt başarıyla silindi.
  <?php else: ?>
    HATA: İşlem tamamlanamadı.
  <?php endif;?>
</h3>
<a href="index.php">Listeye dön</a>
