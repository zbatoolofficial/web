<?php include_once "connection.php";
echo $del_id=$_REQUEST['del_id'];
$Delete="DELETE FROM front WHERE user_id='$del_id'";
$query=mysqli_query($conn,$Delete);
if ($query) {
	header('location:product.php');
}
else {
	echo "Not deleted";
}


?>

