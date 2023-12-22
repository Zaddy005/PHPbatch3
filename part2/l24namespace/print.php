<?php

require_once("./music.php");
require_once("./video.php");

require_once("./gallery/photo.php");

use app\gallery\photo;
use app\music;
use app\video;

$music = new music();
$music->play();

$video = new video();
$video->play();

// method1
$photo = new \app\gallery\photo();
$photo->play();


// method 2
$photo = new photo();
$photo->play();

?>