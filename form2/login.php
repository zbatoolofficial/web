<!--?php include_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Login Form</h3>
                <div class="alert alert-danger">not</div>
            </center>
            <form action="Function.php" method="POST">
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your password
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="loginform" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>

</div>




?php include_once 'footer.php'; ?-->
<?php
session_start();
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Login Form</h3>
                <div class="alert alert-danger">
                    <?php
                    if (empty($_SESSION['message'])) {
                        echo "No Message";
                    } else {

                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
            </center>
            <form action="Function.php" method="POST">
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your password
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="loginform" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>

</div>


