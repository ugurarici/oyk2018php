<?php
session_start();

if(!isset($_SESSION['username'])) {
  $_SESSION['username'] = $_GET['username'];
}

echo $_SESSION['username'];
