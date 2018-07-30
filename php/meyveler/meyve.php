<?php

require "data.php";

if(isset($_GET['indis']) && isset($meyveler[$_GET['indis']])){
  echo $meyveler[$_GET['indis']]['isim'];
}
?>
<hr>
<a href="index.php">listeye dön</a>
