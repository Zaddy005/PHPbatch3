<?php
require_once("./Article.php");

$article = new Article();

//var_dump($article->getarticles());

//var_dump($article->getarticlesbyid(1));

//=> Insert

$data = ["title"=>"this is new article 11 ","Lorem Ipsum is simply dummy text of the printing and typesetting industry","4"];
$article->insertarticle($data);
var_dump($article->getarticles());

?>