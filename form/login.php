<?php include_once "header.php"; ?>
  <!--  -->
  <div class="container  pb-1">
  <div class="card bg-dark text-white">
      <img src="14.jpg" class="card-img " alt="...">
      <div class="card-img-overlay bg-dark bg-opacity-50">
           <h1 class="text-center text-warning"><strong>__</strong></h1>
           <h4 class="text-center card-title text-light">Login/Signup</h4>
           <h1 class="text-center card-text text-light"></strong>Login/Signup Into Our Amazing Resturant<strong></h1>
           <p class="text-center card-text text-light">__Login/Signup to continue__</p>
       <!--  -->
         </div>
    </div>

  </div>
<div class="container bg-light pt-3">

 <h1 class="text-center text-warning"><strong>__</strong></h1>
    <h4 class="text-center text-dark">Login/Signup</h4>
    <h1 class="text-center text-dark"></strong>Login/Signup Into Our Amazing Resturant<strong></h1>
    <p class="text-center  text-dark">__Login/Signup to continue__</p>
<!--  -->
<div class="container">
<form action="function.php" method = "POST"> 
  <div class="row text-center">
    <div class="col-md-6">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="First name">
        <label for="floatingInput">First name</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingNumber" placeholder="Phone">
        <label for="floatingPassword">Phone</label>
      </div>
    </div>
    <div class="col-md-6">
       <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingText" placeholder="Last name">
        <label for="floatingText">Last name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
    </div>
 
  <div class="form-floating mt-3">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Message</label>
  </div>
  <div class="container text-center  ">
  <button type="button" class="btn btn-warning btn-lg mt-3 mb-3">Login/Signup</button></div>
   </div>
  <!--  -->
</div>
</form>
</div>

<?php include_once "footer.php"; ?>