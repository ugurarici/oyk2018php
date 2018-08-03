<?php
require_once "init.php";
// readCountIncrement((int) $_GET['id']);
// $article = getArticle((int) $_GET['id']);

$article = Article::find($_GET['id']);
$article->readCountIncrement();
include "views/article.php";
