<?php 

// Note :: Abstrat method can't include body 
// Note :: Any Modifier can set in abstract. 
// A class that extends sub class must extends all of the abstract's methods.
// Note :: Can contain non-/static properties/ common method & constatn variable.
// Note :: When we set abstract method !!! class must be abstract class as well.

abstract class myabstract{

    public $id = 50;
    public static $notifi = "New Article Created";
    const TITLE = "This is a new article for SPORT";

    // Common method  
    public function createpost(){
        echo "i am from create post. Post title is = ".self::TITLE."<br/>";
    }

    public function readpost(){
        echo "i am read post. Id is = ". $this->id. "<br/>";
    }

    abstract public function updatepost($id,$title);

    public function deletepost($id){
        echo "i am from delete post. Id is ${id}"."<br/>";
    }

}

class articles extends myabstract{
    public function updatepost($id,$title){
        echo "i am form update post. Id is ${id}. Title is ${title}. <br/>";
    }
}

// ------------------

abstract class info{

    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($sex);

    public function getname(){
        return $this->name();
    }

    public function getage(){
        return $this->age();
    }

    public function getprofessional($sex){      // $sex m pr yin return ka kaw htr tae professional htae ka $sex ko thi mr m hok
        return $this->professional($sex);
    }
}

class boyclass extends info{

    public function name(){
        return "Ko Tha";
    }

    public function age(){
        return 25;                                
    }

    public function professional($sex){
        switch($sex){
            case "male":
                $job = "Engineer";
                break;

            case "female":
                $job = "Doctor";
                break;
                
            default:
                $job = "Developer";
                break;
        }

        return $job;
    }
}

class girlclass extends info{
    protected function name(){
        return "Ms.July";
    }

    protected function age(){
        return 30;
    }

    protected function professional($sex){
        switch($sex){
            case "male":
                $job = "Engineer";
                break;

            case "female":
                $job = "Doctor";
                break;
                
            default:
                $job = "Developer";
                break;
        }

        return $job;
    }
}



echo "This is Abstract Method <br/>";

// Error :: We can't instantiate abstract class
// $obj1 = new myabstract();
// $obj1->readpost();

$obj2 = new articles();
echo $obj2->id;
echo "<br/>";
echo $obj2::$notifi;
echo "<br/>";
echo $obj2::TITLE;
echo "<br/>";

$obj2->createpost();
$obj2->readpost();
$obj2->updatepost(20,"This is new post 20");
$obj2->deletepost(100);

echo "<hr/>";

$objboy = new boyclass();
$boyname = $objboy->name();
$boyage = $objboy->age();
$boypro = $objboy->professional('male');

echo "${boyname} is a ${boyage} years old & he is an ${boypro} <br/>";

$objgirl = new girlclass();
$girlname = $objgirl->getname();            // protected nae mox lox pro name() ko kaw m ya 
$girlage = $objgirl->getage();              // // protected nae mox lox pro age() ko kaw m ya
$girlpro = $objgirl->getprofessional('female');    // protected nae mox lox pro professional() ko kaw m ya

echo "${girlname} is a ${girlage} years old & she is an ${girlpro} <br/>";

echo "<hr/>";




?>