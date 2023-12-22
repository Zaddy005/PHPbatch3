<?php

use app\gallery\slideshow\picture;
use app\music;
use app\video;

echo __DIR__;
echo "<br/>";

spl_autoload_register(function($classname){
    echo "Loadig the class = {$classname} <br/>";
    $file = str_replace("\\","/",$classname) . ".php";
    if(file_exists($file)){
        require_once(__DIR__."/".$file);
    }else{
        echo "No File Exists";
    }
});

$music = new music();
$music->play();

$video = new video();
$video->play();

$photo = new \app\gallery\photo();
$photo->play();

$portrait = new \app\gallery\animateshow\portrait();
$portrait->play();

$image = new \app\gallery\slideshow\image();
$image->play();

$picture = new picture();
$picture->play();

?>