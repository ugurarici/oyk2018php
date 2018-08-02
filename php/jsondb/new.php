<?php
require_once "init.php";
redirectToLoginIfNotAdmin();
?>
<form action="add.php" method="post">
  Başlık: <input type="text" name="title"><br>
  İçerik: <br>
  <textarea name="content"></textarea>
  <br>
  <button type="submit">Ekle!</button>
</form>
