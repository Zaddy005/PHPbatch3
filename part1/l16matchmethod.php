<?php

// abs() Function
// abs(number);

echo abs(32 )."<br/>"; // 32
echo abs(-32 )."<br/>";// 32
echo abs(32.75 )."<br/>";// 32.75
echo abs(-32.75 )."<br/>"; // 32.75

echo "<hr/>";

// round () Function
// round (number)

echo round(32.64)."<br/>"; // 33
echo round(32.54)."<br/>"; // 33
echo round(32.44)."<br/>"; // 32
echo round(-32.64)."<br/>"; // -33

echo "<hr/>";

// ceil() Function
// ceil(number)

echo ceil(32.64)."<br/>"; // 33
echo ceil(32.54)."<br/>"; // 33
echo ceil(32.44)."<br/>"; // 33

//***
echo ceil(-32.33)."<br/>"; // -32
echo ceil(-32.64)."<br/>"; // -32

echo "<hr/>";

// floor() Function
// floor(number)

echo floor(32.64)."<br/>";
echo floor(32.54)."<br/>";
echo floor(32.44)."<br/>";

//***
echo floor(-32.33)."<br/>"; // -33
echo floor(-32.63)."<br/>"; // -33

echo "<hr/>";

// max() Function
// max(number)

echo max(2,22,4,6,8,10)."<br/>";  // 22
echo max(2,4,20,-40,6,8,10  )."<br/>";  //20

echo "<hr/>";

// min() Function
// min(number)

echo min(2,22,4,6,8,10)."<br/>"; // 2
echo min(2,4,20,-40,6,8,10  )."<br/>"; // -40
echo min(2,4,20,-40,6,"-100",8,10  )."<br/>"; // -40

echo "<hr/>";

// pow() Function
// pow(x,y)

echo pow(2,4)."<br/>"; // 16
echo pow(3,4)."<br/>"; // 81

echo "<hr/>";

//sqrt() Function
//sqrt(number)

echo sqrt(4)."<br/>";//2
echo sqrt(9)."<br/>";//3
echo sqrt(0.81)."<br/>";//0.9
echo sqrt(-0.81)."<br/>";//nan

echo "<hr/>";

// rand() Function
// rand() or rand(min,max)

echo rand()."<br/>";
echo rand()."<br/>";
echo rand(1000,100000)."<br/>";  // cpu speed and ram speec and current date time ty mo x htr tae hr ko py tr pr);

echo "<hr/>";

?>