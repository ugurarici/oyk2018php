<?php

require "data.php";

foreach($meyveler as $key => $meyve){
  echo "<a href='meyve.php?indis=$key'>".$meyve['isim']."</a><br>";
}
