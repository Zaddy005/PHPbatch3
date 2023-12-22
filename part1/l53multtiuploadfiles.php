<?php
//
//if(isset($_POST['submit'])){
//    // echo "Hay";
//
//    // $result = $_POST["profile"];
//    // echo $result;
//
//    $result = $_FILES;
//    echo $result;
//    echo "<pre>".print_r($result,true)."<pre>";
//
//    echo $_FILES['profile']['name'];
//    echo "<br/>";
//    echo $_FILES['profile']['full_path'];
//    echo "<br/>";
//    echo $_FILES['profile']['type'];
//    echo "<br/>";
//    echo $_FILES['profile']['tmp_name'];
//    echo "<br/>";
//    echo $_FILES['profile']['error'];
//    echo "<br/>";
//    echo $_FILES['profile']['size'];
//    echo "<br/>";
//
//
//}

// 30UP


// function getfilesize($filesize){
//     // echo $getfilesize;

//     if(is_numeric($filesize)){
//         $idx = 0;
//         $prefix = ["Bit","Kb","Mb","Gb","Tb","Pb","Eb","Yb"];
//         $fixnum = 1024;

//         while(($filesize/$fixnum) > 0.9){
//             $filesize = $filesize/$fixnum;
//             $idx++;
//         }

//         return round($filesize,2).' '.$prefix[$idx];

//     }else{
//         return "NaN";
//     }


// }

// echo getfilesize(7000000);



//function getfilesizetwo($filesize){
//    // echo $getfilesize;
//
//        $idx = 0;
//        $fixnum = 1024;
//        $prefix = ["Bit","Kb","Mb","Gb","Tb","Pb","Eb","Yb"];
//
//        if($filesize<$fixnum){
//            return $filesize.' '.$prefix[$idx];
//        }else{
//            while(($filesize/$fixnum) > 0.9){
//                $filesize = round($filesize/$fixnum,2);
//                $idx++;
//            }
//
//            return $filesize.' '.$prefix[$idx];
//        }
//
//}
//echo getfilesizetwo(7000000);

//function getfilesizethree($filesize){
//    $size = filesize($filesize);
//    $fixnum = 1024;
//    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Yb"];
//
//    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;
//
////    $result = $size / pow($fixnum,$power) .' '.$prefix[$power];
//    $result = round($size / pow($fixnum,$power),2).' '. $prefix[$power];
//
//    return $result;
//}
//
//echo getfilesizethree("./l45file.txt");


//    $uploaddir = "assets/";
//    $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/cutedog1.jpg
//
//    // move_uploaded_file(temp,actualpathandname)
//
//    if(isset($_POST['submit'])){
//        if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//            echo "File Successfully Uploaded";
//        }else{
//            echo "Try Again";
//        }
//    }

//
//$uploaddir = '/assests';
//$uploadfile = $uploaddir.basename($_FILES['profile']['name']);
//$uploadsize = $_FILES['profile']['size'];
//
//if(isset($_POST['submit'])){
//    if(file_exists($uploadfile)){
//        echo "Sorry File already exists.";
//    }else{
//    }
//}

$filenames = $_FILES['profile']['name'];
$filetmps = $_FILES['profile']['tmp_name'];
$fileerrs = $_FILES['profile']['error'];

$upoaddir= '/assets';




?>





<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<div class="col-md-6 mx-auto mt-5">
    <form action="<?php echo $_SEVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="profile">Profile Picture</label>
            <input type="file" name="profile" id="profile" class="form-control"/>
        </div>
        <input type="submit" name="profile" class="btn btn-primary float-end" value="Upload"/>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>



