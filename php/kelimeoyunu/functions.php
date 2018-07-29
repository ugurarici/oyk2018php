<?php

//  kelime oyunumuz için fonksiyonlarımızı burada tutacağız

function startGame()
{
  $_SESSION['started_at'] = time();
  $_SESSION['used_words'] = ['araba'];
}

function isGameStarted()
{
  if(isset($_SESSION['started_at'])) return true;
  return false;
}

function isGameEnded()
{
  if(isset($_SESSION['ended_at'])) return true;
  return false;
}


function check($word)
{
  if(in_array($word, $_SESSION['used_words'])) endGame("Bu kelimeyi daha önce kullanmıştınız: ". $word);
  $lastWord = end($_SESSION['used_words']);
  $lastLetterOfLastWord = mb_substr(mb_strtolower($lastWord), -1);
  $newWordsFirstLetter = mb_substr(mb_strtolower($word), 0, 1);
  if($lastLetterOfLastWord==$newWordsFirstLetter){
    $_SESSION['used_words'][] = $word;
  } else {
    endGame("Yanlış giriş yaptınız.");
  }
  if(time()-$_SESSION['started_at']>60)
    endGame("Süreniz doldu");
}

function endGame($message)
{
  $_SESSION['ended_at'] = time();
  $_SESSION['end_message'] = $message;
}

function getLastWord()
{
  return end($_SESSION['used_words']);
}

function getResult()
{
  if(!isGameEnded()) return false;
  $result = [];
  $result['total_time'] = $_SESSION['ended_at']-$_SESSION['started_at'];
  $result['total_words'] = count($_SESSION['used_words'])-1;
  $result['avg_time_for_one_word'] = $result['total_time']/$result['total_words'];
  $result['end_cause'] = $_SESSION['end_message'];
  return $result;
}

function resetGame()
{
  session_destroy();

}





//
