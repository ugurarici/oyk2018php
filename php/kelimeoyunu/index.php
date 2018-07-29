<?php

//  bir kelime oyunu yapacağız

//  oyun başlatıldığında oyunun başlama süresi kaydedilir ve rastgele bir kelime başlangıç kelimesi olarak gösterilir

//  oyunun amacı son kelimenin son harfi ile başlayan yeni bir kelime yazmak

//  kişi daha önce kullandığı bir kelimeyi tekrar yazarsa YANAR

//  oyun her turda geçen toplam süreyi kontrol eder, ön tanımlı toplam 1 dakika süre aşılmış ise oyun sonlandırılıreq

//  yanma ya da süre dolması durumunda sonuçlanan oyunun ardından sonuç ekranı gösterilir

//  sonuç ekranında kullanılan toplam süre, girilen toplam kelime, kelime başına harcanan ortalama saniye bilgileri ve "TEKRAR BAŞLA" düğmesi gözükür


//  bu uygulamada her bir oyunu bir oturum sayacağız ve oyuna dair güncel durumu oturum verileri içinde tutacağız yani SESSION kullanacağız
session_start();

require_once "functions.php";

//  sayfaya ilk geldiğinde oyun başlamış mı diye bakalım, yoksa nasıl oynanır sayfasını gösterelim

if($_GET['action']=='reset'){
  resetGame();
  header("Location: index.php");
  die();
}

if(!isGameStarted() && $_GET['action']!='start'){
  include "views/howToPlay.php";
  die();
} elseif($_GET['action']=='start') {
  startGame();
}

if(isGameStarted() && isset($_POST['word']))
  check($_POST['word']);

if(isGameStarted() && !isGameEnded()) {
  $lastWord = getLastWord();
  include "views/gameForm.php";
}

if(isGameEnded()) {
  $result = getResult();
  include "views/result.php";
}





//
