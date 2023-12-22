<?php

// =>Syntax (Note : cookie gone after browser close)
//setcookie('cookiename',"value");

//setcookie('mmk',"Myanmar kyat");
//echo "Cookie Set Successfully"

// =>Syntax (Note : cookie gone after browser close)
//setcookie('cookiename',"value",expire);

//setcookie('mmk','Myanmar Kyat',time()+60*60*24*3); // 3day

setcookie('mmk','Myanmar Kyat',time()+86400*5);// 5day
echo "Cookie Set Successfully"


?>