<?php

class myiterate{

    public $article;
    public $comment = true;

    public function __construct($val){
        $this->article = $val;
    }

    public function greeting(){
        echo "Hello World";
    }

}

echo "This is Iterate Objects <br/>";

$objs = new mycopyobj("This is new article");

foreach($objs as $key => $obj){
    echo $key .' = '.$obj."<br/>";
}

var_dump($objs);

echo "<hr/>";

?>
<!--
Object ty ko looping pat yin properties ty pl ya mr pr method ty ko ma ya pr bu

-->
