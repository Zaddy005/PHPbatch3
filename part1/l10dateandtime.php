<?php

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();

echo $getdate;
echo "<br/>";
var_dump($getdate);

echo "<br/>";
echo "This is seconds = ". $getdate["seconds"]."<br/>";
echo "This is minutes = ". $getdate["minutes"]."<br/>";
echo "This is hours = ". $getdate["hours"] % 12 ."<br/>";
echo "This is hours = ". $getdate["hours"]."<br/>";

echo "This is wday = ". $getdate["wday"]."<br/>"; // 5 // day of the week

echo "This is mday = ". $getdate["mday"]."<br/>"; // 3 // day of the month
echo "This is mon =     ". $getdate["mon"]."<br/>"; // 3 // month
echo "This is month = ". $getdate["month"]."<br/>"; // March


echo "This is year = ". $getdate["year"]."<br/>"; // 2023

echo "This is yday = ". $getdate["yday"]."<br/>"; // 61 // day of the year
echo "This is weekday = ". $getdate["weekday"]."<br/>"; // Friday

echo "This is month = ". $getdate["0"]."<br/>"; // 1677841504

echo "<hr/>";

$time = time();
echo "This is time = ". $time."<br/>";// 1677842097

// DATE/TIME fromat
//date(format,timestamp)


//a - Lowercase am or pm
$date = date('a',$time);
echo "This is format a = ".$date ."<br/>"; // pm

//A - Uppercase AM or PM
$date = date("A",$time);
echo "This is a format A = ".$date."<br/>"; // PM

//----------------------------------------------------

//d - The day of the month (from 01 to 31)
$date = date("d",$time);
echo "This is a format d = ". $date. "<br/>"; // 03 // day leading zero

//D - A textual representation of a day (three letters)
$date = date("D",$time);
echo "This is a formate D = ".$date."<br/>"; // Fri

// ---------------------------------------------

//F - A full textual representation of a month (January through December)
$date = date("F",$time);
echo "This is F = ".$date."<br/>"; // March // Januray / December

// ---------------------------------------------

//g - 12-hour format of an hour (1 to 12)
$date = date("g",$time);
echo "This is g = ".$date."<br/>";// 5 / hour by number (12hr format, no lead ing zero)

//G - 24-hour format of an hour (0 to 23)
$date = date("G",$time);
echo "This is G = ".$date."<br/>";// 17 / hour by number (24hr format, no lead ing zero)

// ---------------------------------------------

//h - 12-hour format of an hour (01 to 12)
$date = date('h',$time);
echo "This is format h = ".$date."<br/>";// 05 / hour by number (12hr format, leading zero)

//H - 24-hour format of an hour (00 to 23)
$date = date('H',$time);
echo "This is format H = ".$date."<br/>";// 17 / hour by number (24hr format, leading zero)

// ---------------------------------------------

//i - Minutes with leading zeros (00 to 59)
$date = date('i',$time);
echo "This is fromat i = ".$date."<br/>"; // 59 // minute

// ---------------------------------------------

//j - The day of the month without leading zeros (1 to 31)
$date = date('j',$time);
echo "This is fromat j = ".$date."<br/>"; // 3 day of month no leading zero

// ---------------------------------------------

//l (lowercase 'L') - A full textual representation of a day
$date=date("l",$time);
echo "This is format l = ".$date."<br/>";  //Friday

//L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
$date=date("L",$time);
echo "This is format L = ".$date."<br/>";  // 0 //Leap Year(1=true, 0=false)

// ---------------------------------------------

//m - A numeric representation of a month (from 01 to 12)
$date = date('m',$time);
echo "This is format m = ".$date."<br/>";// 03 day of month leading zero

//M - A short textual representation of a month (three letters)
$date = date('M',$time);
echo "This is format M = ".$date."<br/>";  // Mar (jan/feb)

// ---------------------------------------------

//n - A numeric representation of a month, without leading zeros (1 to 12)
$date = date('n',$time);
echo "This is format n = ".$date."<br/>";  //

// ---------------------------------------------

//s - Seconds, with leading zeros (00 to 59)
$date = date('s',$time);
echo "This is format s = ".$date."<br/>";  //Fri, 03 Mar 2023 18:10:52 +0630

// ---------------------------------------------

//r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
$date = date('r',$time);
echo "This is format r = ".$date."<br/>";  //Fri, 03 Mar 2023 18:10:52 +0630

// ---------------------------------------------

$date = date('U',$time);



?>

<!--https://www.php.net/manual/en/timezones.asia.php-->


<!--a - Lowercase am or pm-->
<!--A - Uppercase AM or PM-->

<!--d - The day of the month (from 01 to 31)-->
<!--D - A textual representation of a day (three letters)-->

<!--F - A full textual representation of a month (January through December)-->

<!--g - 12-hour format of an hour (1 to 12)-->
<!--G - 24-hour format of an hour (0 to 23)-->

<!--h - 12-hour format of an hour (01 to 12)-->
<!--H - 24-hour format of an hour (00 to 23)-->

<!--i - Minutes with leading zeros (00 to 59)-->

<!--j - The day of the month without leading zeros (1 to 31)-->

<!--l (lowercase 'L') - A full textual representation of a day-->

<!--L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)-->

<!--m - A numeric representation of a month (from 01 to 12)-->
<!--M - A short textual representation of a month (three letters)-->

<!--n - A numeric representation of a month, without leading zeros (1 to 12)-->

<!--r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)-->

<!--s - Seconds, with leading zeros (00 to 59)-->

<!--U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)-->

<!--Y - A four digit representation of a year-->
<!--y - A two digit representation of a year-->

<!--z - The day of the year (from 0 through 365)-->