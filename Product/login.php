<?php include_once 'header.php';
?>

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
        <div class="col-md-6 offset-3 ">

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
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit" name="loginform">Register</button>
        <footer>Already a member? <a href="reg.php">Login here</a></footer>
    </form>
</main>
</body>
</html>



