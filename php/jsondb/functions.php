<?php

function redirectToLoginIfNotAdmin()
{
  if(!isset($_SESSION['is_admin'])){
    header("Location: login.php");
    die("Sen yetkili bi abiye benzemiyosun");
  }
}
