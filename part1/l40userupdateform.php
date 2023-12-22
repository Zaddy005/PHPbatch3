<?php

    ini_set('display_errors',1);

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = 'phpdbone';

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    if($conn->connect_error){
        die("failed to connect".$conn->connect_error);
    }
    $sql = "SELECT id,name,email FROM users";
    $result = $conn->query($sql);



    if(isset($_POST['submit'])){

//        $stmt = $conn->prepare('UPDATE users SET name=?,email=?,password=? WHERE id=?');
//        $stmt->bind_param('sssi',$name,$email,$password,$id);

        $query = "Update users SET "; // beware space
        $query .="name=?,"; // beware comma
        $query .="email=?,"; // beware comma
        $query .="password=?";
        $query .=" WHERE id=?"; // beware space


        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssi',$name,$email,$password,$id);


        $id = $_POST['userid'];
        $name = textfilter($_POST['name']);
        $email = textfilter($_POST['email']);
        $password = md5(textfilter($_POST['password']));
        $stmt->execute();

    //        echo $name;
    //        echo $email;
    //        echo $password;

//        $conn = mysqli_connect('localhost',"root","","phpdbone");
//        if(mysqli_connect_error()){
//            echo "failed to connect ".mysqli_connect_error();
//            exit();
//        }
//        echo "Connect Successfully <br/>";

//        // Data INSERT
//        $stmt = "INSERT INTO users(name,email,password) VALUE(?,?,?)";
//        $insertstmt = mysqli_prepare($conn,$stmt);
//        mysqli_stmt_bind_param($insertstmt,'sss',$name,$email,$password);
//
//        mysqli_stmt_execute($insertstmt);
//        echo "New User Created  Successfully";
//        mysqli_close($conn);

        echo "New User Created  Successfully";

        $stmt->close();
        $conn->close();

    }

function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;

}

?>

<!--CREATE TABLE IF NOT EXISTS users(-->
<!--    id INT AUTO_INCREMENT NOTN ULL PRIMARY KEY,-->
<!--    name VARCHAR(20),-->
<!--    email VARCHAR(20),-->
<!--    password VARCHAR(255)-->
<!--);-->

<!DOCTYPE html>
<html>
<head>
    <title>User  Update  Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container" >
    <div class="col-md-5 mx-auto" >
        <h3 class="text-center my-3" >Registe Form</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

            <div class="form-group mb-3" >
                <label for="userid" >User ID</label>
                <select name="userid" id="userid" class="form-control" >

                    <?php

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $id = $row['id'];
                                echo "<option value='$id' >$id</option>";
                            }
                        }else{
                            echo "<option value='' >No Data</option>";
                        }

                    ?>

                </select>
            </div>

            <div class="form-group mb-3" >
                <label for="name" >Full Name</label>
                <input type="text" name="name" id="name" class="form-control" autocomplete="off" />
            </div>

            <div class="form-group mb-3" >
                <label for="email" >Email</label>
                <input type="email" name="email" id="email" class="form-control" autocomplete="off" />
            </div>

            <div class="form-group mb-3" >
                <label for="password" >Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off" />
            </div>

            <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sign up"  />

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>



