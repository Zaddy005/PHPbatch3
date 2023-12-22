<?php

//The argument of four type
//i - integer
//d - double
//s - string
//b - boolean

// Mysqli Procedural

$conn = mysqli_connect('localhost','root','','phpdbone');
if(mysqli_connect_error()){
    echo "Failed to connect ".mysqli_connect_errno();
    exit();
}
echo "Connected <br/>";

$stmt = "INSERT INTO students(firstname,lastname,city) VALUE(?,?,?);";
$insertprepare = mysqli_prepare($conn,$stmt);
mysqli_stmt_bind_param($insertprepare,'sss',$firstname,$lastname,$city);

$firstname = 'Zaw';
$lastname = "Gyi";
$city = "Chin";
mysqli_execute($insertprepare);
mysqli_close($conn);
echo "Success <br/>";
echo "<hr/>";

// Object Oriented

$conn = new mysqli('localhost','root','','phpdbtwo');
if($conn->connect_error){
    echo "Failed to connect".$conn->connect_errno;
};
echo "Connected <br/>";

$stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) value(?,?,?)");
$stmt->bind_param('sss',$firstname,$lastname,$city);

$firstname = "Kyaw Kyaw";
$lastname = "Aung";
$city = "bago";
$stmt->execute();

$firstname = "hnin";
$lastname = "Mya";
$city = "bago";
$stmt->execute();

$firstname = "aye";
$lastname = "mya";
$city = "mawlamyine";
$stmt->execute();

$stmt->close();
$conn->close();

echo "New Record Created Successfully";
echo "<hr/>";

// PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected <br/>";
    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) value(:firstname,:lastname,:city)");
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
    $stmt->bindParam(":city",$city);

    $firstname = "Kyaw Kyaw";
    $lastname = "Aung";
    $city = "bago";
    $stmt->execute();

    $firstname = "hnin";
    $lastname = "Mya";
    $city = "bago";
    $stmt->execute();

    $firstname = "aye";
    $lastname = "mya";
    $city = "mawlamyine";
    $stmt->execute();

    echo "New Records Insert Successful <br/>";

}catch(PDOException $e){
    echo "Error found".$e->getMessage();
}

$conn = null;

?>