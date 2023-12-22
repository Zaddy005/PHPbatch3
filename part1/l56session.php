<?php

//Note :: Session store on Server (Global Variable)

session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1;
}

echo $_SESSION['idxcount'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<body>

<ul>
    <li><a href="./l56session.php" >Set Session</a></li>
    <li><a href="./l56destorysession.php" target="_blank"  >Delete Session</a></li>
</ul>

</body>
</html>


<!--23CC-->
