<?php include_once "header.php";
include_once "connection.php";
$Select = "SELECT * FROM `profile`";
$query = mysqli_query($conn, $Select);
?>
?>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Gloria+Hallelujah&family=IBM+Plex+Serif:wght@100&family=Kanit:wght@100&family=Lato:wght@900&family=Lobster&family=Merriweather+Sans:wght@800&family=Montserrat:wght@900&family=Oswald:wght@700&family=Poppins:wght@500&family=Roboto:wght@100;900&family=Sarabun:wght@100;200&family=Squada+One&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/lib/Font-Awesome/css/regular.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<div class="container">
<form  action="function.php" method="POST">
<input type="text" name="user_id" value="<?php echo $ROW_USERINFO['id'] ?>">
        <div class="row text-light mt-5">
            <center><h2> Edit Profile</b></center>
            <div class="col-md-6 text-light">
                <label for="name">
                    Enter Your Name
                </label>
                <input type="text" id="name" value="<?php echo $ROW_USERINFO['name'] ?>" class="form-control" name="name"
                 placeholder="Enter Your Name">
            </div>
            <div class="col-md-6 text-light">
                <label for="">
                    Enter Your Email
                </label>
                <input type="email" class="form-control" name="email" value="<?php echo $ROW_USERINFO['email'] ?>" name="email" placeholder="Enter Your Email">
            </div>
            <div class="col-md-6 text-light">
                <label for="">
                    Select Gender
                </label>
                <br> 
                <input type="radio" class="" name="gender" value="Male"
                value="Male" <?php
             if (empty($USERDATATABLE['gender'])) {
  echo '';
 } else {
 if ($USERDATATABLE['gender'] == 'Male') {
 echo 'checked';
 } else {
 } }
  ?>> Male
                <input type="radio" class="" name="gender" value="Female"> Female
            </div>
            <div class="col-md-6 text-light">
                <label for="">
                    Enter Number
                </label>
                <input type="number" class="form-control" name="number"  placeholder="+92">
            </div>
            <div class="col-md-6 text-light">
                <label for="">
                    Enter Address
                </label>
                <textarea name="address" class="form-control"  placeholder="Address"></textarea>
            </div>
            <div class="col-md-6 text-light">
                <label for="">Select City</label>
                <select name="city" class="form-select">
                    <option value="FSD">Faislabad</option>
                    <option value="MLT">Multan</option>
                    <option value="LHR">Lahore</option>
                </select>
            </div>
            <center>
            <div class="col-md-6 text-light">
                <br>
                <button class="btn btn-warning" name="updateprofile">Update</button></center>
            </div>

        </div>
    </form>
</div>
<!--  -->
<!--  -->
<?php 
session_start();
include_once 'connection.php';
if(isset($_POST['formsubmit'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
	$lname=$_POST['lname'];
    $pass=$_POST['user_password'];
    $INSERT="INSERT INTO `table`(`name`, `email`, `last`, `user_password`) VALUES ('$fname','$email','$lname','$pass')";
    $query=mysqli_query($conn,$INSERT);
    if($query)
    {
        echo "<br>Data inserted successfully";
    }
    else
    {
        echo mysqli_error($query);
    }
} 

if (isset($_REQUEST['formupdate'])) {
	$fname=$_POST['fname'];
    $email=$_POST['email'];
	$lname=$_POST['lname'];
    $pass=$_POST['user_password'];
    $update = "UPDATE `table` SET `name`='$fname',`email`=' $email',`last`='$lname',`user_password`=' $pass'";
    $query = mysqli_query($conn,$update);
    if ($query) {
        header('location:Signup.php');
    } else {
        echo "Not Update";
    }
}
 if (isset($_REQUEST['loginbtn'])) {
      echo $email=$_POST['useremail'];
      echo $pass=$_POST['userpassword'];
     $Select ="SELECT * FROM `table` WHERE email='$email' AND user_password='$pass'";
     $query = mysqli_query($conn, $Select);   
     $row=mysqli_fetch_array($query);
     if(mysqli_num_rows($query)>0) {
        if($row['status']=='admin'){
           echo $_SESSION['user_id']=$row['id'];
            header('location: Admin/admin.php');

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
if(isset($_POST['Orderbtn'])){
    $first=$_POST['first'];
	$user_email=$_POST['email'];
    $guest=$_POST['gueste'];
    $time=$_POST['time'];
    $INSERT="INSERT INTO `book`( `first`, `email`, `gueste`, `time`) VALUES ( '$first', '$user_email', '$guest', '$time')";
    $query=mysqli_query($conn,$INSERT);
    if($query)
    {
        echo "<br>Data inserted successfully";
    }
    else
    {
        echo mysqli_error($query);
    }
}

if(isset($_POST['updateprofile'])){
    $first=$_POST['name'];
	$user_email=$_POST['email'];
    $gender=$_POST['gender'];
    $number=$_POST['number'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
    $INSERT="INSERT INTO `profile`(`name`,`email`,`gender`,`number`,`address`,`city`) 
    VALUES ('$first','$user_email','$gender','$number','$Address','$City')";
    $query = mysqli_query($conn,$INSERT);
    if($query)
    {
        echo "<br>Data inserted successfully";
    }
    else
    {
        echo mysqli_error($query);
    }
}
<!--  -->