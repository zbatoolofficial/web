<?php
session_start();
include_once "connection.php";
if (isset($_POST['btnSubmit'])) {
	$name=$_POST['u_name'];
	$email=$_POST['u_email'];
	$phone=$_POST['u_phone'];
	$message=$_POST['u_msg'];

	$INSERT="INSERT INTO `frontend`( `u_name`, `u_email`, `u_phone`, `u_msg`)
	 VALUES ('$name','$email','$phone','$message')";
	$query=mysqli_query($conn,$INSERT);
	if ($query) {
		echo "<br>.Data inserted successfully";
		header("location:index.php");
	}
	else {
		echo mysqli_error($query);
	}
}
if (isset($_POST['signupbtn'])) {
	$first=$_POST['f_name'];
	$last=$_POST['l_name'];
	$email=$_POST['u_email'];
	// $password=$_POST['u_password'];
	//$pass=password_hash($password, PASSWORD_DEFAULT);
	$selectST="SELECT * FROM front WHERE u_email='$email'";
	$queryST=mysqli_query($conn,$selectST);
	$RowST=mysqli_fetch_array($queryST);
	$RowST['u_email'];
	if (mysqli_num_rows($queryST)>0) {
		echo "<br>.Email already exists";
	}
	else {
		$INSERT="INSERT INTO `front`(`f_name`, `l_name`, `u_email`, `u_password`)
		 VALUES ('$first','$last','$email','$password')";
		$query=mysqli_query($conn,$INSERT);
		if ($query) {
		  echo
		//    "<br>.Account created successfully";
		header("location:login.php");	
			}
			else {
				echo mysqli_error($query);
			}
}
	}
	if (isset($_REQUEST['loginform'])) {
		$email=$_POST['u_email'];
		$pass=$_POST['u_password'];
		//$verify=password_verify($password, $pass);
		$SELECT="SELECT * FROM front WHERE u_email='$email'AND u_password='$password'";
		$query=mysqli_query($conn,$SELECT);
		$row=mysqli_fetch_array($query);
		if (mysqli_num_rows($query)>0) {
	// 		echo
	// 		$_SESSION['user_id']=$row['user_id'];
	// 		header("location:index.php");
	// 	}
	// 	else
	// 	{
	// 		$_SESSION['message']="<center>Email and password doesn't match</center>";
	// 		header("location:login.php");
	// 	}
	// }
	if($row['status']=='admin'){
		echo $_SESSION['user_id']=$row['id'];
		echo $_SESSION['u_name']=$row['u_name'];
		echo $_SESSION['u_email']=$row['u_email'];
		//  header('location:ad.php');

	 }else{

		 $_SESSION['user_id']=$row['id'];
		  header("location:index.php");
	 }

  }
else {
 echo "helo";
 $_SESSION['message']="<center>Email and password doesn't match </center>";
		  header("location:login.php");
 }
}
	if (isset($_REQUEST['formupdate'])) {
	$name=$_POST['u_name'];
	$email=$_POST['u_email'];
	$id=$_POST['id'];
	$UPDATE = "UPDATE `frontend` SET `u_name`='$name', `u_email`='$email' WHERE id= '$id'";
	$query=mysqli_query($conn,$UPDATE);
	if ($query) {
		header('location:product.php');
		echo "Ok updated";
	}
	else {
		echo "Not updated";
	}
}
	
	if (isset($_REQUEST['update-signup'])) {
	$fname=$_POST['f_name'];
	$lname=$_POST['l_name'];
	$email=$_POST['u_email'];
	$id=$_POST['id'];
	$UPDATE = "UPDATE `front` SET `f_name`='$fname', `l_name`='$lname', `u_email`='$email' WHERE id= '$id'";
	$query=mysqli_query($conn,$UPDATE);
	if ($query) {
		//header('location:adminpanel.php');
		echo "Ok updated";
	}
	else {
		echo "Not updated";
	}
}
if (isset($_REQUEST['updateprofile'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $gender =  $_REQUEST['gender'];
    $city = $_REQUEST['city'];
    $address = $_REQUEST['address'];
    $number = $_REQUEST['number'];
    $user_id = $_REQUEST['user_id'];
    $SELECT = "SELECT * FROM `profile` WHERE user_id = '$user_id'";
    $Query = mysqli_query($conn, $SELECT);
    if (mysqli_num_rows($Query) > 0) {
        $UPDATE = "UPDATE `profile` SET `gender`='$gender',`city`='$city',`address`='$address',`number`='$number' WHERE user_id = '$user_id'";
        $query = mysqli_query($conn, $UPDATE);
        if ($query) {
            echo "Update";
        } else {
            echo "no Update";
        }
    } else {
        $INSERT = "INSERT INTO `profile`(`gender`, `city`, `address`, `number`, `user_id`) VALUES ('$gender','$city','$address','$number','$user_id')";
        $Query = mysqli_query($conn, $INSERT);
        if ($Query) {
            echo "Data Inserted";
        } else {
            echo "No Insert data Error";
        }
    }
}

?>

