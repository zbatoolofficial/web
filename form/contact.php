<?php include_once "header.php"; ?>
<div class="container  pb-1">
    <div class="card bg-dark text-white">
        <img src="map.jpg" class="card-img " alt="...">
        <div class="card-img-overlay bg-primary bg-opacity-50">
             <h1 class="text-center text-warning"><strong>__</strong></h1>
    <h4 class="card-title text-center text-dark">Contact</h4>
    <h1 class="card-text text-center text-dark"></strong>Contact information<strong></h1>
    <p class="card-text text-center  text-dark">Porro eveniet, autem ipsam vitae consequatur!</p>

           </div>
      </div>
    
   
     <!-- <h5 class="e">Card title</h5>
          <p class="">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="">Last updated 3 mins ago</p> -->
      
    <!-- <iframe class="opacity-50"
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13620.730179289892!2d73.07593304999999!3d31.409096299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1651811542886!5m2!1sen!2s"
      width="100%" height="450" style="border:0; background-color: aliceblue;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    
    </div>
<div class="container bg-light pt-3">
  <h1 class="text-center text-warning"><strong>__</strong></h1>
  <h3 class="text-center text-dark"></strong>Contact<strong></h3>
    <p class="text-center  text-dark">Porro eveniet, autem ipsam vitae consequatur!</p>

<div class="row text-center mt-5">
      <div class="col-md-4">
        <img src="icon-contact-email.png" class="h-50 w-50" alt="">
        <h4 class="mt-4">Write Us </h4>
        <p class="text-secondary">info@tastyc.com
          reservation@tastyc.com </p>
      </div>
      <div class="col-md-4">
        <img src="icon-contact-tel.png" class="h-50 w-50" alt="">
        <h4 class="mt-4">Contact Us </h4>
        <p class="text-secondary">+76 (094) 754 43 71  </p>
      </div>
      <div class="col-md-4">
        <img src="icon-contact-adr.png" class="h-50 w-50" alt="">
        <h4 class="mt-4">Visit Us </h4>
        <p class="text-secondary">Canada, Toronto, North Avenue 31B </p>
      </div>
    </div>
    <div class="tst-spacer tst-spacer-only-bottom-space"></div>
    <h1 class="text-center text-warning"><strong>__</strong></h1>
    <h4 class="text-center text-dark">Contact</h4>
    <h1 class="text-center text-dark"></strong>Write us a message<strong></h1>
    <p class="text-center  text-dark">Porro eveniet, autem ipsam vitae consequatur!</p>
<!--  -->
<div class="container">
  <form  action="function.php" method="POST">
  <div class="row">
    <div class="col-md-6">
     
      <div class="form-floating mb-3">
        <input type="text"name="username" class="form-control"placeholder="First name">
        <label>First name</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" name="userphone" placeholder="Phone">
        <label>Phone</label>
      </div>
    </div>
    <div class="col-md-6">
       <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username" placeholder="Last name">
        <label>Last name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control"  name="useremail" placeholder="name@example.com">
        <label>Email</label>
      </div>
    </div>
 
  <div class="form-floating mt-3">
    <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
    <label>Message</label>
  </div>
  <div class="container text-center  ">
  <button type="submit" name="formsubmit" class="btn btn-warning btn-lg mt-3 mb-3">Send A Message</button></div>
   </div>
  <!--  -->

</div>
</form>
</div>

<?php include_once "footer.php"; ?>