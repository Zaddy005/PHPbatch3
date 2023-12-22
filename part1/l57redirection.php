<?php

//echo "I am php browser redirect";
//header('location:https://google.com');
//exit();

$query = $_SERVER['QUERY_STRING'];

switch (){
    case "google";
        header("Location:https://google.com");
        exit;
        break;
    case "linkedin";
        header("Location:https://linkedin.com");
        exit;
        break;
    case "cookies";
        header("Location:https");
}

?>


