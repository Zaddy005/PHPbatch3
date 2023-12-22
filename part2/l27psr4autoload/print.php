<?php

require_once("./vendor/autoload.php");

use app\music;
use app\video;
use app\gallery\photo;
use app\gallery\animateshow\portrait;
use app\gallery\slideshow as slider;
use app\gallery\slideshow\picture;
use app\models\Article;
use config\auth;

$music = new music();
$music->play();

$video = new video();
$video->play();

$photo = new photo();
$photo->play();

$portrait = new portrait();
$portrait->play();

$image = new slider\image();
$image->play();

$picture = new picture();
$picture->play();

$article = new Article();
$article->index();

$auth = new auth();
$auth->index();



?>


<!--composer dump-autoload-->
<!--composer dump-autoload -o -->
<!-- -o  -->
<!--
 composer dump-autoload
 current file path yae cmd mr run lyk yin
 vender so tae folder 1 ku ya pr lae ml p yin json file create py ya pr ml
 autoload 3 ml so yin json file 1 ku lo pr tl  use that json file name - "composer.json"

 => in Json file

 {
    "autoload":{
        "psr-4":{
            "app\\":"app",
            "config\\":"config"
            ....
        }
    }
 }


 -->