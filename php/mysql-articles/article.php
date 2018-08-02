<?php
require_once "init.php";
$article = getArticle((int)$_GET['id']);
include "views/article.php";
