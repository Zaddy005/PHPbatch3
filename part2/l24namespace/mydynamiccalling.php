<?php

//spl_autoload_register(callback function);
use app\music;
use app\video;

spl_autoload_register(function($classname){
    echo "Loading the class = $classname <br/>";
    require_once("$classname.php");
});

$music = new music();
$music->play();
$video = new video();
$video->play();


?>