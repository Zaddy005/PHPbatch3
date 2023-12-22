<?php

use app\music;

require_once('./mycustomload.php');

mycustomload::loader("music");
$music = new music();
$music->play();


?>