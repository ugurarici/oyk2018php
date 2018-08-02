<?php

//  her talebin başında çağırılması gerekenleri bunun içinde yazacağız

//  bu uygulamada oturum yönetimi olacağı için oturumu başlatmalıyız
session_start();

//  uygulama genelinde veriyi sağlayan data.php dosyasını da sağlamalıyız
require_once "data.php";

//  tüm sayfalardan fonksiyonlarımıza erişebilmek için
require_once "functions.php";
