<?php
// session_start();
// if (empty($_SESSION['user_id']))
//     header("location: login.php");
 include_once "header.php";?>
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Courses</h1>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- Courses Start -->
 <div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-color text-uppercase mb-2">Tranding Courses</h6>
            <h1 class="display-6 mb-4 text-color2">Our Courses Upskill You With Driving Training</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-color text-white fs-5 py-1 px-4 mb-4">$99</div>
                        <h5 class="mb-3">Automatic Car Lessons</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-color me-2"></i>Beginner</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-color me-2"></i>3 Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/courses-1.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-color text-white fs-5 py-1 px-4 mb-4">$99</div>
                        <h5 class="mb-3 ">Highway Driving Lesson</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-color me-2"></i>Beginner</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-color me-2"></i>3 Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/courses-2.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-color text-white fs-5 py-1 px-4 mb-4">$99</div>
                        <h5 class="mb-3">International Driving</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-color me-2"></i>Beginner</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-color me-2"></i>3 Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/courses-3.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-color text-center p-5">
                    <h1 class="mb-4 text-color2">Make Appointment</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name">
                                    <label for="gname"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email">
                                    <label for="gmail"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="cname" placeholder="Courses Type">
                                    <label for="cname"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="cage" placeholder="Car Type">
                                    <label for="cage"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Message" name="message" style="height: 100px"></textarea>
                                    <label for="message"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit" name ="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

<?php include_once "footer.php";?>
