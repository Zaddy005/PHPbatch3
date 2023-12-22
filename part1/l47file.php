<?php

//=> readfile(flie.format);
//readfile ka file ty ko read py tr pr
// echo readfile("l8loops.php");

//--------------------------------------------------------------------
//=> filesize(file.format);
// filesize ka file htae mr shi tae word ty ko count py tr pr
// echo filesize("l8loops.php");

//--------------------------------------------------------------------
// function
// fopen | fread | fclose

// fopen = ka file ty ko open tr pr
//          fopen(filename,mode);
// out ka r ka mode pr | "r" mean = read

//          fread(file,length)\

//          fclose(put file that u open);
//file ty ko open p pyan close ya pr tl

// $fileopen = fopen("l43file.txt","r");
// if($fileopen){
//     $fileread = fread($fileopen,10);
//     fclose($fileopen);
//     echo $fileread;
// }else{
//     echo "File not fount !!";
// }

// For Linux (Give Permission)
//sudo chmode 777 -R /var/www/html
//sudo chmode 775 -R /var/www/html

//--------------------------------------------------------------------
// w (mode "w" mean = write )
// w ka file ma shi yin twr create lout ml shi yin overwrite lout ml
// if ak file htae mr srr yin overwrite lout mr pr

// fwrite(file,string)
// fwrite ka py lyk tae fiel htae mr twr write mr pr ak string ty ko


//$fileopen = fopen("l44file.txt",'w');
//if($fileopen){
//    fwrite($fileopen,'Hello guys!!! I created new file');
//
//    $fileopen = fopen('l44file.txt','r');
//    $fileread = fread($fileopen,filesize('l44file.txt'));
//    fclose($fileopen);
//
//    echo $fileread;
//}else{
//    echo "File Not Found !!!";
}

//--------------------------------------------------------------------


// Note:: 'x' write only, create a new file. return FALSE if file already exists.
//$fileopen = fopen('l45file.txt','x');
//if($fileopen){
//    $fwrite = fwrite($fileopen,"Hello guys!!! I created new file by using x");
//    fclose($fileopen);
//}else{
//    echo "file not fount!!!";
//}

//--------------------------------------------------------------------


//$fileopen = fopen('l46file.txt','c');
//if($fileopen){
//    fwrite($fileopen,"I created new file");
//
//    $fileopen = fopen('l46file.txt','c+');
//    $fileread = fread($fileopen,filesize('l46file.txt'));
//    echo $fileread;
//}else{
//    echo "File not found";
//}

//$fileopen = fopen('l47file.txt','w');
//if($fileopen){
//    $message = "Welcome to our class. \n";
//    fwrite($fileopen,$message);
//    $message = "Thank you for using php file system";
//    fwrite($fileopen,$message);
//
//    $fileopen = fopen('l47file.txt','r');
//    $fileread = fread($fileopen,filesize('l47file.txt'));
//    fclose($fileopen);
//    echo $fileread;
//}else{
//    echo "File not found";
//}

//$fileopen = fopen('l47file.txt','a');
//if($fileopen){
//    $message = "Welcome to our class. \n";
//    fwrite($fileopen,$message);
//    $message = "Thank you for using php file system \n";
//    fwrite($fileopen,$message);
//
//    $fileopen = fopen('l47file.txt','r');
//    $fileread = fread($fileopen,filesize('l47file.txt'));
//    fclose($fileopen);
//    echo $fileread;
//}else{
//    echo "File not found";
//}

//-----------------------------------------------------------------

//=> Other file Function

//file_get_contents() = Read
//file_put_contents() =write
//file_exists() = check file exists or not
//copy() = copies a file
// rename() = renames a file
//unlink() = deletes a file

//echo file_get_contents('l43file.txt');

//$existingfile = 'l60file.txt';
//$newfile = "l50file.txt";

//if(is_file($existingfile)){
//    $message = file_get_contents($existingfile);
//    $message .= "Thank you for using php file system. \n";
//    file_put_contents($newfile,$message) or die("Unable to ope file");
//}else{
//    echo "File not found";
//}

//if(file_exists($existingfile)){
//    $message = file_get_contents($existingfile);
//    $message .= "Thank you for using php file system. \n";
//    file_put_contents($newfile,$message) or die("Unable to ope file");
//}else{
//    echo "File not found";
//}


//$file = 'l44file.txt';
//copy($file,'l51file.txt');
//echo file_get_contents('l51file.txt');

//=>rename
//$file = "l51file.txt";
//rename($file,"l52file.txt");
//echo file_get_contents('l52file.txt');


// unlink();
//$file = 'l52file.txt';
//if(file_exists($file)){
//    unlink($file);
//    echo "File Delete Successfully";
//}else{
//    echo "File Not Found";
//}


//=> Show all .txt file
//echo "<pre>".print_r(glob('*.txt'),true)."</pre>";

// => Show all .php file
//echo "<pre>".print_r(glob('*.php'),true)."</pre>";



?>


<!--26PHP-->
<!--      -->