<?php

// Note :: Type  hinting is concept  that provides hints to function for the expected data type of arguments;

// Advantages of tyep hinting:
//      helps users deug the code easily or the code provides error very specifically
//      a great conept for static kind of data.


// Disadvantages of type hinting:
//      fuunctions only takes one type of data
//      the dynamic data or argument are not there

//declare(strict_types=1);
//declare(strict_types=1);

class myhints{
    public function getdata($val){
        echo $val ."<br/>";
    }
}

echo "This Arguemnt is type hinting♂ <br/>";

$obj1 = new myhints();
$obj1->getdata("aungaung"); // aungaung
$obj1->getdata("10"); // 10
$obj1->getdata(100); // 100
$obj1->getdata(25.68); // 25.68
$obj1->getdata(true); // 1


echo "<hr/>";

class myhints2{
    public function getdata(string $val){
        echo $val ."<br/>";
    }
}

echo "This Arguemnt is type hinting <br/>";

$obj2 = new myhints2();
$obj2->getdata("aungaung"); // aungaung
$obj2->getdata("10"); // 10
//$obj2->getdata(100); // 100
//$obj2->getdata(25.68); // 25.68
//$obj2->getdata(true); // 1

echo "<hr/>";

class myhints3{
    public function getdata(int $val){
        echo $val ."<br/>";
    }
}

echo "This Arguemnt is type hinting <br/>";

$obj3 = new myhints3();
//$obj3->getdata("aungaung"); // aungaung
//$obj3->getdata("10"); // 10
$obj3->getdata(100); // 100
//$obj3->getdata(25.68); // 25.68
//$obj3->getdata(true); // 1

echo "<hr/>";

class myhints4{
    public function getdata(bool $val){
        echo $val ."<br/>";
    }
}

echo "This Arguemnt is type hinting <br/>";

$obj4 = new myhints4();
//$obj4->getdata("aungaung"); // aungaung
//$obj4->getdata("10"); // 10
//$obj4->getdata(100); // 100
//$obj4->getdata(25.68); // 25.68
$obj4->getdata(true); // 1

echo "<hr/>";

class myhints5{
    public function getdata(float $val){
        echo $val ."<br/>";
    }
}

echo "This Arguemnt is type hinting <br/>";

$obj5 = new myhints5();
//$obj5->getdata("aungaung"); // aungaung
//$obj5->getdata("10"); // 10
$obj5->getdata(100); // 100
$obj5->getdata(25.68); // 25.68
//$obj5->getdata(true); // 1

echo "<hr/>";

class myhints6{
    public function getdata(array $val){
        echo "<pre>".print_r($val,true)."</pre>" ."<br/>";
    }
}

echo "This Arguemnt is type hinting <br/>";

$obj6 = new myhints6();
//$obj6->getdata("aungaung"); // aungaung
//$obj6->getdata("10"); // 10
//$obj6->getdata(100); // 100
//$obj6->getdata(25.68); // 25.68
//$obj6->getdata(true); //1
$obj6->getdata(["red","green","blue"]);

echo "<hr/>";

class myhint7{

    public function total(array $arrs){
        $result = 0;
        foreach($arrs as $arr){
            $result = $result + $arr;
        }
        return $result;
    }
}



$obj7 = new myhint7();
echo $obj7->total([10,20,30,40,50]);

class phone{
    protected $brand;
    protected $hasfacessensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value){
        return $this->brand = $value;
    }

    public function sethasfacesensor(bool $value){
        return $this->hasfacessensor = $value;
    }

    public function setnumberofsim(int $value){
        return $this->numberofsim = $value;
    }

    public function setprice(float $value){
        return $this->price = $value;
    }


    public function getinfo(){
        echo "Brand Name = $this->brand <br/> Face Sensor = $this->hasfacessensor <br/> Number of sim = $this->numberofsim <br/> Price is = $this->price ";
    }
}

$objphone = new phone();
$objphone->setbrand("Iphone");
$objphone->sethasfacesensor(true);
$objphone->setnumberofsim(2);
$objphone->setprice(999.68);

$objphone->getinfo();

echo "<hr/>";

?>