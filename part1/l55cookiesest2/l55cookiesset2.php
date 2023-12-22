<?php



// =>Syntax (Note : cookie gone after browser close)
//setcookie('cookiename',"value",expire,path);

setcookie('tbh','Thai Baht',time()+(865000*5),'/'); //5days
echo "Cookie set Successfully";

?>