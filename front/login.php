<?php
session_start();
include_once "connection.php";

if(isset($_POST['loginform'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select="SELECT * FROM front ";
    $query=mysqli_query($conn,$select);

    $row=mysqli_fetch_array($query);

    if(mysqli_num_rows($query)>0){
      session_start();
      $_SESSION['user_id']= $row['user_id'];
      header("location:index.php");
    }
    else{
      $_SESSION['message']="<center>Email and password doesn't match</center>";
      echo $_SESSION['message'];
      header("location:login.php");
    }
}


include_once "header.php"; ?>
<!--  -->
<!-- <form method="post" action="" id="loginForm">
-->
               <!-- <div class="container">
                  <div id="loginMsgs"></div>

                      <div class="form-group">
                          <label for="username">Username</label>
                          <div id="error_username"></div>
                          <input type="text" class="form-control" name="username">
                       </div>


                      <div class="form-group">
                          <label for="username">Password</label>
                          <div id="error_password"></div>
                          <input type="password" class="form-control" name="userpassword">
                      </div>

                      <div class="form-group">
                          <button class="btn btn-primary" name = "formsubmit">Login</button>    -->
                    <!-- </div>

               </div>

           </form>
</div>
    </div>

</div> -->
<div class="container-fluid w-50">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5 shadow-lg p-3  bg-body rounded border border-dark">
         
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
               <center>
                   <h2>Login Form</h2>
                   <div class="alert alert-warning">not</div>
</center>
<?php
                if (empty($_SESSION['message'])) {
                    echo '';
                }
                else {
                    echo '<div class="alert alert-danger">'.$_SESSION['message'].'</div>';
                    unset($_SESSION['message']);
                }
                ?>
                <label for="" class="w-100">
                    Email
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Password
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="loginform" class="btn btn-warning form-control mb-2 mt-2">
            <center><p> Not Register? <a href="Signin.php" class="text-dark fw-bold" style="text-decoration:none;"> Create an Account</a><p></center>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php";?>