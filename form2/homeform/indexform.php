<?php include_once 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Admission Form</h3>
            </center>
            <form action="Function.php" method="POST">
            <div class="d-flex">   
            <label class="w-50 ">
                     Name:
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
                <label class="w-50 ">
                    CNIC:
                    <input type="text" class="form-control" name="userCNIC" placeholder="12345-678000-0">
                </label></div>
                <div class="d-flex">   
            <label class="w-50 ">
                     Father name:
                    <input type="text" class="form-control" name="userfathername" placeholder="Enter Your Father name">
                </label>
                <label class="w-50 ">
                    FATHER CNIC:
                    <input type="text" class="form-control" name="userfatherCNIC" placeholder="33100-000000-0">
                </label></div>
                <div class="d-flex">
                <label class="w-50 ">
                     Email:
                    <input type="email" class="form-control" name="useremail" placeholder="Email">
                </label>
                <label class="w-50 ">
                     Password:
                    <input type="password" class="form-control" name="userpassword" placeholder="">
                </label></div>
                <div class="d-flex">
                <label class = "w-50 ">
                Educational Level:<br>
                <div class="form-check">
  <input class="form-check-input" type="radio" name="Radio">
  <label class="form-check-label" >
   Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Radio" checked>
  <label class="form-check-label" >
   Inter
  </label>
</div></label>
<label class = "w-50 ">
Gender: <br>
<input type="checkbox">Male</checkbox><br>
<input type="checkbox">Female</checkbox>
                </label></div>
                <label class="w-100 ">
                    Address:
                    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
  <label>Address</label>
</div>
                    <!-- <input type="textarea" class="form-control" name="useraddress" placeholder="Address"> -->
                </label>

              
                
                <br>
                <center>
                <input type="submit" name="formsubmit" class="btn btn-primary mt-2">
</center>
            </form>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>