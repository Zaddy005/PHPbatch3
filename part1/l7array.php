<?php

// Arrays
//(i) Indexd Array (Manual Array)
//(ii) Associative Array
//(iii)Multidimensional Array

//(i) Indexed Array (Manual Array) - Arrays with a numeric index
//(ii) Associative Array - Array with name key
//(iii)Multidimensional Array - Arrays containings one or more arrays


//(i) Indexd Array (Manual Array) - Arrays with a numeric index

$names = array("aung aung","mg mg","zaw zaw","kyaw kyaw","tun tun");

echo "Indexed Array";
echo $names;
echo "<br/>";
echo count($names);
print $names;
echo "<br/>";
print_r($names,false);

echo "<br/>";

$colors = ["red","green","'blue","white","black","pink"];
echo $colors;
echo "<br/>";
echo count($colors);
echo "<br/>";
echo "<pre>".print_r($colors,"true")."</pre>";
var_dump($colors);

$colors[6] = "grey";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors[9] = "violet";

echo "<pre>".print_r($colors,"true")."</pre>";
echo "my fav color is ". $colors[3];

echo "<hr/>";

//-----------------------------------------------------------------------------------

//(ii) Associative Array - Array with name key
echo "Associactive Array <br/>";

$news = array("pone"=>'this is post one',"ptwo"=>'this is post two',"pthree"=>'this is post three');
var_dump($news);
echo "<br/>";

$medias = ["pone"=>"this is post one",
"ptwo"=>"this is post two",
"pthree"=>"this is post three"];

var_dump($medias);
echo "<br/>";

$meidas["pfour"] = "this is post four";
$medias["pfive"] = "this ispost five";

echo  "<pre>".print_r($meidas,"true")."</pre>";
echo "i like this post, so post title is ". $medias["pthree"];
echo "<hr/>";

//----------------------------------------------------------------------------------

//(iii)Multidimensinal Array - Arrays containings one or more arrays
echo "Multidimensinal Array <br/>";
//$paints = array(
//    array('red','green','blue','white'),
//    array("pen","pencil","ruler"),
//    array("paper",'plastic')
//);

$paints = array(
        ['red','green','blue','white'],
        ["pen","pencil","ruler"],
        ["paper",'plastic',"name"=>"Zaddy"]
);

var_dump($paints);
echo"<br/>";
echo "<br/>";

echo $paints[2]["name"];
echo"<br/>";
echo"<br/>";
echo $paints[1][1];
echo "<br/>";
echo "<br/>";
echo $paints[2][1]; //
echo "<br/>";
echo "<br/>";


//$persons = array(
//        array("name"=>"Zaddy","age"=>"20"),
//        array("name"=>'Su SU',"age"=>"30"),
//        array("name"=>"Yin Yin","age"=>"25")
//);

$persons = array(
    ["name"=>"Mgmg","age"=>"20"],
    ["name"=>'Su SU',"age"=>"30"],
    ["name"=>"Yin Yin","age"=>"25"]
);

var_dump($persons);
echo"<br/>";
echo "<br/>";

echo $persons[0]["name"];
echo "<br/>";
echo $persons[1]["age"];
echo "<br/>";
echo $persons[2]["name"];
echo "<br/>";
echo $persons[2]["age"];


?>

<!--3AR-->
