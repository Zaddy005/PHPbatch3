<?php

interface greeting{
    public function speak();
}

class myanmar implements greeting{
    public function speak(){
        return "Mingalarpar!";
    }
}

class thailand implements greeting{
    public function speak(){
        return "Sawadikap!";
    }
}

class english implements greeting{
    public function speak(){
        return"Hello!";
    }
}

function result($objs){
    foreach ($objs as $obj ){
        echo $obj->speak();
        echo "<br/>";
    }
}

echo "This is polymorphism concept with interface <br/>";

$data = [
  new myanmar(),
  new thailand(),
  new english()
];


result($data);

echo "<hr/>";

?>