<?php include_once 'header.php';
include_once 'connection.php';
echo $del_id = $_GET['del_id'];
$select = "DELETE FROM register WHERE id = '$del_id'";
$query = mysqli_query($conn, $select);
// $row = mysqli_fetch_array($query);
// echo $row['user_name'];
if($query){
    header('location:index.php');
}else{
    echo"not del";
}
