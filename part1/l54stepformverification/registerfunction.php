<?php

ini_set('display_errors',1);
session_start();
require_once('./dbconnect.php');

// sudo chmod 777 -R assets/

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = MD5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
    $getnewsletter = textfilter($_POST['newsletter']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getphone;
    // echo $getaddress;


    if($getemail && $getpassword){
        try{
            
            $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter,documents) VALUE(:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:newsletter,:documents)");
            
            $stmt->bindParam(":profile",$profile);
            $stmt->bindParam(":firstname",$firstname);
            $stmt->bindParam(":lastname",$lastname);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->bindParam(":dob",$dob);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":address",$address);
            $stmt->bindParam(":newsletter",$newsletter);
            $stmt->bindParam(":documents",$documents);
            

            $countfiles = count($_FILES['profile']['name']);
           
            if($countfiles){
                
                for($x=0; $x<$countfiles; $x++){
                    
                    $uploaddir = "./assets/";
                    $filename = $_FILES['profile']['name'][$x];
                    
                    // $uploadfile = $uploaddir.basename($filename); //.assets/dog1.jpg
                    
                    // $getformat = explode('.',$filename); ['cutedog1','jpg']
                    // $newfilename = round(microtime(true))."_".current($getformat).".".end($getformat); 168751443_cutedog1.jpg
                    // $uploadfile = $uploaddir.basename($newfilename); //jpg
                    
                    $getfilecode = uniqid()."_".time();
                    $getextension = pathinfo($filename,PATHINFO_EXTENSION); //jpg
                    $newfilename = $getfilecode.".".basename($getextension); //64957e0699b94_1687518726.jpg
                    $uploadfile = $uploaddir.basename($newfilename); // ./assets/64957e0699b94_1687518726.jpg
                    

                    $uploadtype = explode('.',$filename);
                    $uploadtype = strtolower(end($uploadtype));
                    $allowextensions = ['jpg','jpeg','png','gif'];
                    $filesize = $_FILES['profile']['size'][$x];
                    $filetmp = $_FILES['profile']['tmp_name'][$x];
                    
                    $errors = [];
                    
                    // check file extensions
                    if(in_array($uploadtype,$allowextensions) === false){
                        $errors[] = "Sorry,we just allowd JPG,JPEG,PNG and GIF file types.";
                    }
                    // check file size
                    if($filesize > 3000000){
                        $errors[] = "Sorry,your file is too large";
                    }
                    // upload
                    if(empty($errors)){
                        move_uploaded_file($filetmp,$uploadfile);
                        $profile = $uploadfile;
                        echo "File Successfully Uploaded";
                        
                    }else{
                       echo "<pre>".print_r($errors,true)."</pre>";
                    }


                }   
            }


            $firstname = $getfirstname;
            $lastname = $getlastname;
            $email = $getemail;
            $password = $getpassword;
            $dob = $getdob;
            $phone = $getphone;
            $address = $getaddress;
            $newsletter = $getnewsletter;
            
            $getdocuments = NULL;
            
            if(isset($_POST['documents'])){
                $docs = $_POST['documents'];

                foreach($docs as $doc){
                    $getdocuments .= $doc.",";
                    echo $getdocuments;
                }
            }

            $documents =  $getdocuments;

            // $stmt->execute();
               // echo "New Records Created Successfully";

            if($stmt->execute()){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location:./planncohomedecoration/index.php");
            }else{
                echo "Try Again";
            }

         

        }catch(PDOException $e){
            echo "Error Found:  ".$e->getMessage();
        }

        $conn = null;
    }

}

function textfilter($data){
   $data = trim($data);
   $data = htmlspecialchars($data);
   $data = stripslashes($data);
   return $data;
}


?>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    profile VARCHAR(255),
    firstname VARCHAR(20),
    lastname VARCHAR(20),
    email VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    dob DATE,
    phone VARCHAR(13),
    address VARCHAR(100)
);


DESC users;
SHOW INDEX FROM users; 
SHOW INDEXS FROM users;
-->


