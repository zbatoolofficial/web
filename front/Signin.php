<?php 
session_start();
// echo $_SESSION['user_id'];
include_once "connection.php";
include_once "header.php";?>

<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-md-6 offset-3">
            <center>
                <h3>Login Form</h3>
                <div class="alert alert-danger">not</div>
            </center>
            <form action="funtion.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" >
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="userpassword">
        </div>
        <section>
            <button type="submit"name="loginform" class="btn btn-primary mt-2">Login</button>
            <a href="register.php">Register</a>
        </section>
    </form>
        </div> -->
        <!-- <div class="col-md-6 offset-3 "> -->

<!--LOGIN FORM-------------------------->          
          
<!--?php
include_once 'header.php';
include_once 'connection.php';
$Select = "SELECT * FROM signup";
$Query = mysqli_query($conn, $Select);

?> 
<center>
<h1>Registration Page</h1>
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
         
            <form action="function.php" method="POST">
                <label class="w-50 ">
                    Name
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
           
                <label class="w-50 ">
                    Email
                    <input type="email" class="form-control" name="useremail" placeholder="Email">
                </label>
                <label class="w-50 ">
                    Password
                    <input type="password" class="form-control" name="userpassword" placeholder="">
                </label>
                <br>
                <input type="submit" name="formupdate" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>
 -->
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">

    <title>Register</title>
</head>
<body> -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 offset-3 shadow-lg p-3 bg-body rounded border border-warning ">
    <form action="function.php" method="post">
       <center> <h1>Sign Up</h1></center>
       <label for="" class="w-100">
                    FirstName
                    <input type="text" class="form-control" name="f_name" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    LastName
                    <input type="text" class="form-control" name="l_name" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Email
                    <input type="email" class="form-control" name="u_email" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Password
                    <input type="password" class="form-control" name="u_password" placeholder="Enter Your Name">
                </label>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit" name="signupbtn" class="btn mt-2 form-control btn-warning">Register</button>
        <footer class=" mt-2">Already a member? <a href="login.php">Login here</a></footer>
    </form>
    </div>
    </div>
    </div>
</main>
<!-- </body>
</html> -->
</div>
<?php include_once "footer.php";?>




