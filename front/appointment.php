<?php include_once "header.php";?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Appointment</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 " >
                    <h6 class="text-primary text-uppercase mb-2 text-color">Appointment</h6>
                    <h1 class="display-6 mb-4 text-color2">Make An Appointment To Pass Test & Get A License On The First Try</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="gname" placeholder="Your Name">
                                    <label for="gname"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0 bg-light" id="gmail" placeholder="Your Email">
                                    <label for="gmail"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cname" placeholder="Courses Type">
                                    <label for="cname"></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="cage" placeholder="Child Age">
                                    <label for="cage"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Message" id="message" style="height: 150px"></textarea>
                                    <label for="message"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-main-color w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->



<?php include_once "footer.php";?>