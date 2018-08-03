<?php

function getArticles($page = 1, $order = 'DESC', $takePerPage = 5) {
    global $connection;
    $limitPass = ($page - 1) * $takePerPage;

    $articles = $connection->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT :pass , :take");

    $articles->bindValue(':pass', $limitPass, PDO::PARAM_INT);
    $articles->bindValue(':take', $takePerPage, PDO::PARAM_INT);

    $articles->execute();

    return $articles->fetchAll(PDO::FETCH_CLASS, "Article");
}

// function getArticle($articleId) {
//     global $connection;
//     $article = $connection->prepare("SELECT * FROM articles WHERE id = :id");
//     $article->execute(['id' => $articleId]);
//     return $article->fetch(PDO::FETCH_OBJ);
// }

function readCountIncrement($articleId) {
    global $connection;
    $article = $connection->prepare("UPDATE articles SET read_count=(read_count+1) WHERE id = :id");
    $article->execute(['id' => $articleId]);
    return $article;
}
