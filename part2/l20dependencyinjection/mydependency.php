<?php

class course{
    public $courseidx;

    public function __construct($val){
        $this->courseidx = $val;
    }
    public function getcourseidx(){
        echo "Course Index is ".$this->courseidx  . "<br/>";
    }

}

class lesson extends course{
    public $lessonnumber;

    public  function __construct($val){
        $this->lessonnumber = $val;
    }

    public function getlessonnumber(){
        echo "Lesso NUmber is = ".$this->lessonnumber ."<br/>";
    }

}

echo "This is  Dependency Injection <br/>";

$getcourse = new course(1);
$getcourse->getcourseidx(); // Course Index is 1

$getlesson = new lesson(10);
$getlesson->getlessonnumber(); // Lesso NUmber is = 10

$getlesson->getcourseidx(); // Course Index is

//$getcourse->getlessonnumber(); // error

echo "<hr/>";


// => Parent to Child

class vehicle{
    public $modelnumber;
    public $evcarobj;
    public $carmodeobj;

    public function __construct($val,$price,$type){
        $this->modelnumber = $val;
        $this->evcarobj = new evcar($price);
        $this->carmodeobj = new carmode($type);
    }
    public function getmodelnumber(){
        echo "Course Index is ".$this->modelnumber  . "<br/>";
    }

}

class evcar extends vehicle {
    public $price;

    public  function __construct($val){
        $this->price = $val;
    }

    public function getprice(){
        echo "Ev Car Price is = ".$this->price ."<br/>";
    }

}

class carmode extends vehicle {
    public $type;

    public  function __construct($val){
        $this->type = $val;
    }

    public function gettype(){
        echo "Car Type is = ".$this->type ."<br/>";
    }

}

$getvehicle = new vehicle(1111,20000,'luxury');
$getvehicle->getmodelnumber(); // Course Index is 1111
$getvehicle->evcarobj->getprice(); // Ev Car Price is = 20000


$getevcaroruce = new evcar(10);
$getevcaroruce->getprice(); // Lesso NUmber is = 10

$getvehicle->carmodeobj->gettype(); // Car Type is = luxury

echo "<hr/>";

// Child to Parent

class phone{
    public $brand;

    public function __construct($val){
        $this->brand = $val;
    }
    public function getbrand(){
        echo "Phone Brand is ".$this->brand  . "<br/>"; // passing by properties
        return "Phone Brand is ".$this->brand  . "<br/>"; // passing by member method

    }

}

class phonemodel extends phone {
    public $price;

    public  function __construct($val,phone $phone){
        $this->price = $val;
//        $this->brand = $phone->brand; // passing by properties
        $this->brand = $phone->getbrand(); // passing by member method
    }

    public function getprice(){
        echo "Price is = ".$this->price ."<br/>";
    }

}

$getphone = new phone("iphone");
$getphone->getbrand();

$getphonemodel = new phonemodel(500,$getphone);
$getphonemodel->getprice();

// passing by properties
$getphonemodel->getbrand();
//echo $getphonemodel->brand; // iPhone

// passing by method
$getphonemodel->brand;

?>