<?php

// => func_get_args();
function totalresult(){
    $arr = func_get_args();

    $total = 0;

    for($i =0; $i < count($arr); $i++){
        $total += $arr[$i];
    }
    return $total;
}

echo totalresult(10,20,30); //60

echo "<hr/>";

function getval($val1,$val2,$val3){
    echo "val1 result is = ${val1} <br/>";
    echo "val2 result is = ${val2} <br/>";
    echo "val3 result is = ${val3} <br/>";
}

getval("aung aung","maung maung","kyaw kyaw");
echo "<br/>";
getval(...["red","green","blue"]);

echo "<hr/>";

//=> Spread Operator In Array

$phones = ["apple","oppo","vivo","samsung"];
$cars = ["toyota","suziki","mazada"];
$computer = ["max","aoc","acer"];

$myowns = [$phones,$cars,$computer];
echo "<pre>".print_r($myowns,'true')."</pre>";


$yourowns = [...$phones,...$cars,...$computer];
echo "<pre>".print_r($yourowns,'true')."</pre>";


echo "This is Variadic Function <br/>";

function myfun1($val){
    return $val;
}

echo myfun1("mango"); // mango
echo "<br/>";
echo myfun1("mango","orange"); // mango
echo "<br/>";

function myfun2(...$val){
    return $val;
}

//echo myfun2();// array

echo myfun2("mango"); // mango
echo "<br/>";
echo myfun2("mango","orange"); // mango
echo "<br/>";

echo "<pre>".print_r(myfun2("mango"),true)."</pre>";
echo "<pre>".print_r(myfun2("mango","orange"),true)."</pre>";

echo "<pre>".print_r(myfun2(100,200,300),true)."</pre>";
echo "<pre>".print_r(myfun2(["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";
echo "<pre>".print_r(myfun2("red","green","blue",["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";

echo "<hr/>";

function myfun3(...$val){
    echo $val[1]."<br/>";
}

myfun3("maung maung","aung aung","zaw zaw");// aung aung
myfun3(["maung maung","aung aung","zaw zaw"],"su su");// aung aung

function myfun4(...$val){
    return $val[2] . $val[0][2] . $val[1];
}

echo myfun4(["maung maung","aung aung","zaw zaw"]," is my elder brother ","Mr "); //Mr zaw zaw is my elder brother

echo "<br/>";

function myfun5(string $name,int ...$age):string{
    return "${name} is ${age[0]} years old ";
}

echo myfun5('su su',25); // su su is 25 yeras old

echo "<br/>";

function myfun6(int ...$numbers):int{
    return array_sum($numbers);
}

echo myfun6(1,2,3); // 6

echo "<hr/>";


// => null coalescing operator (??)

function myfun7(...$val){
    echo $val[1] ? "Valid Data" : "No data";
    echo "<br/>";

    echo $val[1] ?? "No data";
    echo "<br/>";
}

myfun7("Hello world ","Dream world");  //
myfun7("Hellow World");

echo "<hr/>";

?>