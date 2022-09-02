<!--?php include_once 'header.php';
include_once 'connection.php';
echo $del_id = $_GET['del_id'];
$select = "DELETE FROM signup WHERE id = '$del_id'";
$query = mysqli_query($conn, $select);
// $row = mysqli_fetch_array($query);
// echo $row['user_name'];
if($query){
    header('location:index.php');
}else{
    echo"not del";
}--><?php
include_once 'connection.php';
$del_id = $_GET['del_id'];
echo $del_id;
$DELETE = "DELETE FROM signup WHERE id = '$del_id'";
$query = mysqli_query($conn, $DELETE);
if ($query) {
    header('location: index.php');
    // echo "DElete";
} else {
    echo "Not Del";
}
