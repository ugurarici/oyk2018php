<?php

class Article
{
  var $id;
  var $title;
  var $subtitle;
  var $summary;
  var $content;
  var $read_count;
  var $created_at;
  var $updated_at;

  protected $connection;

  function __construct()
  {
    $this->connection = new PDO("mysql:host=localhost;dbname=oyk2018_blog;charset=utf8;", "root", "root");
  }

  static function find($id)
  {
    $article = new self;
    $article->initById($id);
    return $article;
  }

  function initById($id)
  {
    $article = $this->connection->prepare("SELECT * FROM articles WHERE id = :id");
    $article->execute(['id' => $id]);
    $fonksiyondanOkunan = $article->fetch(PDO::FETCH_OBJ);
    $this->id = $fonksiyondanOkunan->id;
    $this->title = $fonksiyondanOkunan->title;
    $this->subtitle = $fonksiyondanOkunan->subtitle;
    $this->summary = $fonksiyondanOkunan->summary;
    $this->content = $fonksiyondanOkunan->content;
    $this->read_count = $fonksiyondanOkunan->read_count;
    $this->created_at = $fonksiyondanOkunan->created_at;
    $this->updated_at = $fonksiyondanOkunan->updated_at;
  }

  function readCountIncrement()
  {
    readCountIncrement($this->id);
  }

  function okunmaSayisiSoyle()
  {
    return $this->read_count . " kere okundu";
  }
}
