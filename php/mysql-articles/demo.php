<?php

require_once "init.php";

$article = new Article;
$article->initById(15);
var_dump($article);
