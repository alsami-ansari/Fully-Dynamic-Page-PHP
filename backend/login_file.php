<?php
include("conection.php");
session_start();

if (isset($_POST['btn'])) {

    $uname = $_POST['uem'];
    $upsw = $_POST['upw'];

    //to prevent from mysqli injection  
    $uname = stripcslashes($uname);
    $upsw = stripcslashes($upsw);

    $uname = mysqli_real_escape_string($db_ctn, $uname);
    $upsw = mysqli_real_escape_string($db_ctn, $upsw);


    $qry = "SELECT  `u_name`, `u_pw` FROM `user_login` WHERE `u_name`='$uname'&& `u_pw`='$upsw'";

    $result = mysqli_query($db_ctn, $qry);

    if ($result->num_rows == 1) {

        $_SESSION['username'] = $uname;
        header("location: dashboard.php");
    } else {
        echo '<script>alert("Please Enter Correct Password") 
              window.location.href="http://localhost/new_texi/backend/index.php";
        
        </script>';
    }
}
