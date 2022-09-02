
<?php
session_start();
session_destroy();
// include_once 'connection.php';
// $user_id = $_SESSION['user_id'];
// $SELECT = "SELECT * FROM signup WHERE id = '$user_id'";
// $QUERY = mysqli_query($conn, $SELECT);
// $ROW_USERINFO = mysqli_fetch_array($QUERY);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drivin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Icon  Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
        <div class="container-fluid bg-col2 text-light p-0 top-container">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-color me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-color me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-color me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link  " href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link  " href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link  " href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link " href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 ">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-color me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4"  onclick="navbtn()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-right justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SHOP</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index cart.php" class="dropdown-item">Products</a>
                        <a href="cart.php" class="dropdown-item">Cart</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.php" class="dropdown-item">Features</a>
                        <a href="appointment.php" class="dropdown-item">Appointment</a>
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <a href="" class="btn btn-main-color py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a> -->
            <?php
        $count=0;
         if(isset ( $_SESSION['cart']))
         {
          $count=count ( $_SESSION['cart']);
         }
        ?>
        <a href="cart.php" class="btn btn-outline-warning">My CART(<?php echo $count; ?>)</a>


        </div>
    </nav>
    <!-- Navbar End -->