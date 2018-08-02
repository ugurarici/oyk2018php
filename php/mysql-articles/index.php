<?php

//  veritabanımızdaki articleları listeleyen bir uygulamada

require_once "init.php";

//  standartta ilk sayfada olduğumuzu, adres çubuğundan page parametresi geliyorsa ona göre içerik çekimi yapacağız, fonksiyon için parametreyi hazırlıyoruz
$page = 1;
if(isset($_GET['page']) && $_GET['page']>0) $page = (int)$_GET['page'];

//  tüm yazıları sondan ilke göre bir sayfada 5 tane olacak şekilde sıralayacağım
$articles = getArticles($page);

include "views/home.php";
