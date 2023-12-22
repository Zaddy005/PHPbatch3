<?php

class mycopyobj{
    public $article;

    public function __construct(){
        $this->article = $val;
    }

}

function copyobject(news $obj1,news $obj2){
    $obj2->article = $obj1->article;
}

echo "This is Copy Objects <br/>";

//$news = new mycopyobj();
$news1 = new news("This is the first article 1");
$news2 = new news("This is the second article 2");

echo $news1->article;
echo "<br/>";
echo $news2->article;
echo "<br/>";

copyobject($new1,$new2);



echo "<hr/>";

?>
<!--
Object ty ko looping pat yin properties ty pl ya mr pr method ty ko ma ya pr bu

-->
