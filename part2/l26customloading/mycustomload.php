<?php

class mycustomload{
    public static function loader($classname){
        echo "Loading the class = ${classname} <br/>";
        $file = str_replace("\\","/",$classname);
        if(file_exists($file)){
            require_once(__DIR__."/".$file);
        }else{
            echo "No File found";
        }

    }
}

$obj = new mycustomload();
$obj::loader('music');
$music->play();
?>