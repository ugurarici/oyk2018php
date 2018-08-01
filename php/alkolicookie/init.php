<?php

//   bütün taleplerin içinde bulunmasını istediğim her şeyi buraya yazacağım ve her sayfanın başında çağıracağım

require_once "data.php";

if(!isset($_COOKIE['yas_onay'])){
  header("Location: onay_iste.php");
  die();
}
