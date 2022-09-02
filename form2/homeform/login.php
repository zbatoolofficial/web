<?php include_once 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Admission Form</h3>
            </center>
            <form action="Function.php" method="POST">
                <label class="w-50 ">
                    Enter Your Name
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
                <label class="w-50 ">
                    Enter Your CNIC
                    <input type="" class="form-control" name="userCNIC" placeholder="CNIC">
                </label>
                <label class="w-50 ">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Email">
                </label>
                <label class="w-50 ">
                    Enter Your Password
                    <input type="password" class="form-control" name="userpassword" placeholder="">
                </label>
                <br>
                <input type="submit" name="formupdate" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>