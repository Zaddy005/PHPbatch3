<?php

    // User Defined Function

    //function(){
    //    code to be executed;
    //}

    // Arguments Funciton
    //(i) Single
    //(ii) Multi

//    function(arg1){
//
//    }
//
//    function(arg1,arg2){
//
//    }

// ------------------------------------

    // Default Argument Function

//    function name($name ='aung aung',$age=20){
//        code to be executed;
//    }

// ---------------------------------

    function myfun(){
        echo"my name is mr.function";
    }

    myfun();

    echo "<hr/>";

    function myfun1(){
        $num1 = 10;
        $num2 = 20;
        $cal = $num1 + $num2;
        echo $cal;
    }

    myfun1();
    echo "<hr/>";

    //-----------

    function singlefun($name){
        echo "My name is  {$name}";
    }

    singlefun('zaw zaw');
    echo "<hr/>";

    //-----------

    function multifun($name,$age){
        echo"My name is {$name} and i am ${age} old";
    }

    multifun("ag ag",30);

    echo "<hr/>";
    //-----------

    function defaultfun($name = "hla hla"){
        echo "My name is {$name}";
    }

    defaultfun();

    echo "<hr/>";
    //-----------

    function defaultfun1($num1=10,$num2=20,$num3=30){
        $cal = $num1+$num2+$num3;
        echo"$cal<br/>";
    }

    defaultfun1(); // 30
    defaultfun1(5,10,15); // 30

    echo "<hr/>";

    // ---------------

    function returnfun($num1){
        $cal = $num1 + 10;
        return $cal;
    }

    echo returnfun(20);
    echo "<hr/>";

    function returnfun1($num1,$num2,$num3){
        $cal = $num1+$num2+$num3;
        return $cal;
    }

    echo returnfun1(20,30,40); // 90
    echo"<hr/>";

    $task = "returnfun1";
    echo $task;

    echo "<br/>";

    echo $task(10,20,30);
    echo "<br/>";

    if(function_exists($task)){
        echo "Yes";
    }else{
        echo "No";
    }


?>


