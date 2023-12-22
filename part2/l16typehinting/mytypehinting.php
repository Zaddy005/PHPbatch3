<?php

// Note:: void is a return-only for type decleartion indicating assign. the function does not return a value.
// void availabe as for PHP version 7.1 ^
// void use for data asgin

declare(strict_types=1);

class mytypehinting{
    public $name;
    public function getname():string{
        return $this->name;
    }
    public function setname(string $val):void{
        $this->name = $val;
    }
}

class person extends mytypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr['id'];
        $this->username = $arr['name'];
    }
}

echo "This is Type hinting <br/>";
$obj1 = new mytypehinting();
$obj1->setname("Aung Kyaw kyaw");
echo $obj1->getname();

$obj2 = new person();
$datas = ['id'=>1,'name'=>"honey nway oo"];

$obj2->setinfo($datas);
echo "<br/>";
echo $obj2->userid."<br/>";
echo $obj2->username."<br/>";

echo "<hr/>";

?>


