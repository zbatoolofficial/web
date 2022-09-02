<?php include_once "header.php"; ?>
<!--  -->
<!-- <form method="post" action="" id="loginForm">
--><center>
                   <h2>Login Form</h2>
</center>

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
        <div class="col-md-6 offset-3">
         
            <form action="Function.php" method="POST">
                <label for="" class="w-100">
                    Name
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Password
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="formsubmit" class="btn btn-primary  mt-2">
            </form>
        </div>
    </div>
    
