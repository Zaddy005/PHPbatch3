<?php

// json_encode(array);
// json_decode(array);

$colors = ["red","green","blue"];
var_dump($colors);

$mycolors = json_encode($colors);
echo "<br/>";
echo ($mycolors);
echo "<br/>";
var_dump($mycolors);

//---------------

$students = ['name'=>'aung aung','age'=>25,'city'=>'yangon'];
echo "<pre>".print_r($students)."</pre>";
echo $students['name']."<br/>";
echo $students['age']."<br/>";
echo $students['city']."<br/>";


$studentsen = json_encode($students);
echo $studentsen;

// can't print
// echo $studentsen["name"];
// echo $studentsen["age"];
// echo $studentsen["city"];

echo "<hr/>";

$students = [];

?>