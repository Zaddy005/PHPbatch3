<?php 

// variables
//varialbe scope
//(i)Global variable scope
//(ii)Local variable Scope
//(iii)Static variable Scope

$fullname = 'U Kyaw Kyaw';
$job = 'Developer';

echo $fullname;
print $job;
// in php ("") double quote was know variable but ('') single quote can't
echo "$fullname"; //result = U Kyaw Kyaw
echo '$fullname'; //result = $fullname

echo "<br/>";

echo "My name is               $fullname"; //result = My name is U kyaw Kyaw
echo "<br/>";
echo "My name is ${fullname};"; //result = My name is U kyaw Kyaw
echo "<br/>";
echo 'My name is ${fullname}'; //result = My name is   $fullname
echo "<br/>";

echo "I am ${job}"; //result = I am Developer
echo "<br/>";
echo "I am {$job}";// result = I am Developer

echo "<hr/>";

echo 'He\'s my father, he is a $job';
echo "<br/>";

echo "He's my father, he is a \$job";# escape
echo "<br/>";

echo "He is my father, he is a \${job}"; // escape
echo "<br/>";

echo "He's my father, he is a \{$job}"; //  not escape
echo "<br/>";

echo "He's my father, he is a {\$job}"; //escape
echo "<br/>";

echo "<hr/>";

$gender = print 'female'; //result = female 

// $nation = echo 'burma'; // error

echo "<hr/>";

// Concat (.)
$firstname = 'Aung';
$lastname = 'Kyaw Kyaw';

echo $firstname;
echo $lastname;
echo "<br/>";

echo $firstname.$lastname;
echo "<br/>";

echo $firstname.' '.$lastname;

//Comments
#Single Line Comment

/* Multi Line comment 
comment1
comment2
comment3 */


?>

<!-- 20IN -->

<!--php -S localhost:8000 -t foldername-->