<?php

echo "I am mian index";
echo "<br/>";
//echo $_SERVER["QUERY_STRING"];



echo $_GET['url'];

//=>For Linux
//  sudo a2enmod rewrite
//  sudo service apache2 stop
//  sudo service apache2 start
//  sudo service apache2 restart
//             ( ors )
//  sudo service apache2 reload

// => For Linux ( Apache Edit For rewrite )
//  sudo a2enmod rewrite
// sudo nano /etc/apache2/sites-enabled/000-default.conf
// add these linnes at the end
//<Directory //var/www/html >
// AllowOverride Alls
//<Directory>


?>