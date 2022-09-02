<?php
include_once "connection.php";
if (isset($_POST['formsubmit'])){
$name = $_POST['user_name'];
$cnic = $_POST['cnic'];
$father = $_POST['user_fathername'];
$fcnic = $_POST['fathercnic'];
$email = $_POST['user_email'];
$password = $_POST['user_password'];
$gender = $_POST['Gender'];
$study = $_POST['Study'];
$Address = $_POST['address'];
$INSERT = "INSERT INTO `register`(`user_name`, `cnic`, `user_fathername`, `fathercnic`, `user_email`, `user_password`, `Gender`, `Study`, `address`)
 VALUES ('$name','$cnic','$father','$fcnic','$email','$password','$gender','$study','$Address')";
        $Query = mysqli_query($conn, $INSERT);
if ($Query){
    echo '<h1>CONNECT</h1>';
}else{
    echo 'not';
}
}
if (isset($_REQUEST['formupdate'])) {
    $name =  $_POST['user_name'];
    $email =   $_POST['user_email'];
    $user_id = $_REQUEST['user_id'];
    $update = "UPDATE `register` SET `user_name`='$name',`user_email`='$email' WHERE id= '$user_id'";
    $query = mysqli_query($conn, $update);
    if ($query) {
        header('location: index.php');
    } else {
        echo "Not Update";
    }
}