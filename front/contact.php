<?php 
// session_start();
// if (empty($_SESSION['user_id']))
    // header("location: login.php");
include_once 'connection.php';
include_once "header.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
           
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 "  style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.8444183006827!2d73.06679151462829!3d31.418412359314196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392243450c1147b7%3A0x7a1253803d90ccb9!2sCareer%20Institute%20-%20Jinnah%20Colony%20Campus%20(CIFSD02)!5e0!3m2!1sen!2s!4v1654293886470!5m2!1sen!2s" width="500" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h6 class="text-primary text-uppercase mb-2 text-color">Contact Us</h6>
                    <h1 class="display-6 mb-4 text-color2">If You Have Any Query, Please Contact Us</h1>
                         <form method = "POST" action = "function.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="u_name" placeholder="Your Name">
                                    <label for="name"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" name="u_email" placeholder="Your Email">
                                    <label for="email"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" name="u_phone" placeholder="+009123455">
                                    <label for="subject"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Message" name="u_msg" style="height: 150px"></textarea>
                                    <label for="message"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-main-color py-3 px-5" type="submit" name="btnSubmit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php include_once "footer.php";?>
