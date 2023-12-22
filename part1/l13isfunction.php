<?php

// is_string(variable) Function

$val1 = "Save Myanmar";
echo "val1 is ". is_string($val1). "<br/>";

$val2 = 0;
echo "val2 is ". is_string($val2). "<br/>";

$val3 = 50;
echo "val3 is ". is_string($val3). "<br/>";

// ****
$val4 = '50';
echo "val4 is ". is_string($val4). "<br/>";

$val5 = true;
echo "val5 is ". is_string($val5). "<br/>";

$val6 = "";
echo "val6 is ". is_string($val6). "<br/>";

echo "<hr/>";

//is_numeric(variable) Function
//is_int() / Function / is_integer(variable) Function

$val1 = 50;
echo "val1 is ". is_numeric($val1). "<br/>";
echo "val1 is ". is_int($val1). "<br/>";
echo "val1 is ". is_integer($val1). "<br/>";
echo "<br/>";

$val2 = 34.56;
echo "val2 is ". is_numeric($val2). "<br/>";
echo "val2 is ". is_int($val2). "<br/>";
echo "val2 is ". is_integer($val2). "<br/>";
echo "<br/>";


// ****
$val3 = "50";
echo "val3 is ". is_numeric($val3). "<br/>";
echo "val3 is ". is_int($val3). "<br/>";
echo "val3 is ". is_integer($val3). "<br/>";
echo "<hr/>";

//is_float(variable) Function

$val1 = 40;
echo "val1 is ". is_float($val1). "<br/>";

$val2 = 35.65;
echo "val2 is ". is_float($val2). "<br/>";

$val3 = "34.56";
echo "val3 is ". is_float($val3). "<br/>";
echo "<hr/>";

// "" quote htae ka number so tr ko tot thi dl but -float hok ma hok lr tot ma thi pr bu

// is_bool(variable) Function

//$val1 =false; (in php small pl pyit" cappital letter pl pyit" ya pr tl)
$val1 = FALSE;
echo "val1 is BOOL " . is_bool($val1)."<br/>";

$val1 = false;
echo "val1 is bool " . is_bool($val1)."<br/>";

$val2 = "true";
echo "val2 is ". is_bool($val2). "<br/>";

$val3 = 1;
echo "val3 is ".is_bool($val3)."<br/>";

echo "<hr/>";

// is_array(variable) Function

$val1 = "Help Myanmar";
echo "val1 is ". is_array($val1)."<br/>";

//$val2 = ["aung aung","su su"];
$val2 = array("aung aung","su su");
echo "val2 is ". is_array($val2)."<br/>";

echo "<hr/>";

// is_null(variable) Function

$val1 = 0;
echo "val1 is ".is_null($val1)."<br/>";

$val2 = null;
echo "val2 is ".is_null($val2)."<br/>";

$val3 = NULL; // (in php small pl pyit" cappital letter pl pyit" ya pr tl)
echo "val3 is ".is_null($val3)."<br/>";

$val4 = "null";
echo "val4 is ".is_null($val4)."<br/>";

// is_double
// is_object

// empty(variable) Function Vs isset(variable);

// The following values are emptys;
//0
//0.0
//"0"
//""
//NULL
//FALSE
//array
//[]

echo "<hr/>";

$val1 = "aung aung";
$val = [];

if(empty($val1)){
    echo "Your varialbe 1 is empty";
}

echo "<br/>";

if(isset($val1)){
    echo "Your varialbe 1 is set";
}

echo "<hr/>";

// gettype(varialbe) Function

$val1 = 50;
echo var_dump(50)."<br/>";// int(50)
echo gettype($val1)."<br/>"; // integer

$val2 = 5.6;
echo var_dump($val2)."<br/>"; // float(5.6)
echo gettype($val2)."<br/>"; // double

$val3 = "Save CRPH";
echo var_dump($val3)."<br/>"; // string(9) "Save CRPH"
echo gettype($val3)."<br/>"; // string

$val4 = array();
echo var_dump($val4)."<br/>"; // array(0) { }
echo gettype($val4)."<br/>"; // array

$val5 = false;
echo var_dump($val5)."<br/>"; // bool(false)
echo gettype($val5)."<br/>"; // boolean

echo "<hr/>";

// settype(variable,type) Function


$val1 = 32;
var_dump($val1);
echo "<br/>";
settype($val1,"string");
var_dump($val1);
echo "<br/>";
echo "<br/>";

$val2 = "50";
var_dump($val2);
echo "<br/>";
settype($val2,"integer");
var_dump($val2);
echo "<br/>";
echo "<br/>";

$val3 = true;
var_dump($val3);
echo "<br/>";
settype($val3,"integer");
var_dump($val3);
echo "<br/>";
echo "<br/>";

?>