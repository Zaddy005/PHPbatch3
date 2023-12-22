<?php


// Same Method Name has different implementation of that method


class language{

    public $name;
    public $citizen;

    public function __construct($val1,$val2){
        $this->name = $val1;
        $this->citizen = $val2;
    }

    public function speak(){
        echo "Say Something... <br/>";
    }

}

class burmese extends language{
    public function speak(){
        echo "Hello Mingalarpar... <br/>";
    }
}

class Thai extends language{
    public function speak(){
        echo "Hello sa.... <br/>";
    }
}

$obj1 = new burmese("Ag Ag","burmese");
echo $obj1->name;
echo "<br/>";
echo $obj1->citizen;
echo "<br/>";
$obj1->speak();

$obj2 = new thai("Phi Chi","thai");
echo $obj2->name;
echo "<br/>";
echo $obj2->citizen;
echo "<br/>";
$obj2->speak();

echo "<hr/>";

?>