<?php

$connection = new PDO("mysql:host=localhost;dbname=oyk2018_blog;charset=utf8;", "root", "root");

require_once "functions.php";

require_once "classes/Article.php";

session_start();
