<?php
$color = ["red","green","blue"];
unset($color[1]);
echo "<pre>".print_r($color,true)."</pre>";


$infos = ["name"=>"aung aung","age"=>20,"city"=>"yangon"];
unset($infos["name"]);
$infos = array_values($infos);
echo "<pre>".print_r($infos,true)."</pre>";


?>