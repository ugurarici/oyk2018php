<?php

require_once "init.php";

// bu sayfada yeni kullanıcı formu gösterilir, formdan bilgi gelirse kayıt işlemi denenir

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirmation'])){
  //  üyelik için gerekli bilgiler gelmiş, haydin bakalım
  if($_POST['password'] == $_POST['password_confirmation'])
  {
    //  parolalar da doğru, afferin goçuma
    //  bu kullanıcı adına sahip bir kullanıcı var mı diye bakalım
    $check = $connection->prepare("SELECT COUNT(id) as user_count FROM users WHERE username = :requested_username");
    $check->execute(array('requested_username' => $_POST['username']));
    $result = $check->fetchColumn();
    if($result==0){
      //  bu kullanıcı adı yokmuş, bununla kaydedebiliriz
      $passwordHash = hash('sha256', $_POST['password']);

      $createNewUser = $connection->prepare("INSERT INTO users (username, password) VALUES (:requested_username, :password_hash)");

      $createNewUser->execute(array(
        'requested_username' => $_POST['username'],
        'password_hash' => $passwordHash
      ));

      header("Location: login.php");
      die();
    } else {
      die("Bu ada sahip kullanıcı varmış");
    }
  } else {
    die("Parolalar örtüşmüyor");
  }
}

include "views/user/signup.php";
