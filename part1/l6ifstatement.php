<?php

//if statament

$x = 10;
$y = 20;

//if($x > $y){
//    echo "Your Condition is Y";
//}

//if($x < $y){
//    echo " Your Condition is yes";
//}

//if else
if($x > $y){
    echo "yes";
}else{
    echo "no";
}

echo "<br/>";

if($x < $y) echo "Yes, X less than y"; else echo "No , X greater than y";

echo "<br/>";

$color = "red";

$color =  "red";
$colorvalue = $color; // Assign by refrence

// echo $color;

//if($color =  "red"){
//    echo "My fav color is red";
//}else{
//    echo "I hate red color";
//}


//if($color =  "red"){
//    echo "My fav color is $color";
       //}else{
//    echo "I hate $color color";
//}

if($color =  "red"){
    echo "My fav color is ". $color;
}else{
    echo "I hate ". $color." color";
}

//Logical Operator
// &&(And) ||(Or) !(Not)

$a = 10;
$b = 20;
$c = 30;
echo "<br/>";

if($a < $b || $b > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

    //true  // false    //true
if($a < $b  || $b > $c && $a < $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";
// true      // false   // false
if($a < $b || $b > $c && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";
if(!($a < $b)){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";
    // true     // false    //false
            //true          // false
if(($a < $b || $b > $c) && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";
if($b >  $c) echo "it is true"; elseif($b === 5) echo"it is equal"; else echo "it is false";

echo "<br/>";


// if() elseif() else
if($b > $c)
    echo "it is true";
elseif($b === 200)
    echo"it is equal";
else
    echo "it is false";

// switch

//switch(condition){
//    case label1:
//        code to be excuted;
//    break;
//    case label2:
//        code to be executed;
//    break;
//    ......
//    default:
//        code to be executed;
//}
$phone = "blah";

switch ($phone){
    case "sony":
        echo "i can't buy sony phone";
    break;
    case "iphone":
        echo "i hate apple product";
    break;
    case "mi":
        echo "i can buy";
    break;
    case "samsung":
        echo "my fav moblie product is samsung";
    break;
    default:
        echo "i love keypad";
}

?>
