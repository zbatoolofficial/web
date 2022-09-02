<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
            <h1 class="text-center text-warning"><strong>`````</strong></h1>
             <h4 class="text-center card-title text-warning">LOGIN</h4>
             <h2 class="text-center card-text text-warning"></strong>Apply your information<strong></h2>
             <p class="text-center card-text text-warning">__Login to continue__</p>
            </center>
            <?php include 'connection.php';
            if(isset($_POST['formsubmit'])){
  
  $useremail = $_POST['useremail'];
  $sql = "select * from signup where user_email = '{$useremail}'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['$username'] = $row['user_name'];
        $_SESSION['$useremail'] = $row['user_email'];
        $_SESSION['$userid'] = $row['user_id'];
        $_SESSION['$status'] = $row['status'];
          header("LOCATION: page2.php");
          
      }
  }else{
    echo "input correct email!";
}
            }
  ?>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="" class="w-100">
                    Enter Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Useremail" required>
                </label>
                <input type="submit" name="formsubmit" value="Login" class="btn btn-warning mt-2 mb-5">
            </form> 
        </div>
    </div>