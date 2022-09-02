<?php
include_once 'connection.php';
$edit_id=$_GET['edit_id'];
$Select="SELECT * FROM frontend WHERE id='$edit_id' ";
$query=mysqli_query($conn,$Select);
$row=mysqli_fetch_array($query);
echo $row['u_name'];
include_once "header.php";
?>

<div class="container">
        <div class="row">
            <div class="col-md-7 mt-5 offset-3 shadow-lg p-3 bg-body rounded border border-warning ">
    <form action="function.php" method="post">
       <center> <h1>Sign Up</h1></center>
       <input type="hidden" name="user_id" value="<?php echo $edit_id?>">
                <label for="" class="w-100">
                    Name
                    <input type="text" class="form-control" name="u_name" placeholder="Enter Your Name"  value="<?php echo $row['u_name'] ?>">
                </label>
                <label for="" class="w-100">
                    Email
                    <input type="email" class="form-control" name="u_email" placeholder="Enter Your Name"  value="<?php echo $row['u_email'] ?>">
                </label>
               
        <button type="submit" name="formupdate" class="btn mt-2 form-control btn-warning">Register</button>
        <!-- <footer class=" mt-2">Already a member? <a href="login.php">Login here</a></fooer>t -->
    </form>
    </div>
    </div>
    </div>

<?php include_once "footer.php";?>