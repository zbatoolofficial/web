<?php include_once 'header.php';
include_once 'connection.php';
echo $edit_id = $_GET['edit_id'];
$select = "SELECT * FROM register WHERE id = '$edit_id'";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_array($query);
echo $row['user_name'];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Form Edit</h3>
            </center>
            <form action="function.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $edit_id?>">
                <!-- <label for="" class="w-100">
                    Enter Your Name
                    <input type="text" class="form-control" name="username" value="" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Pass
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label> -->
                <div class="d-flex">   
            <label class="w-50 ">
                     Name:
                    <input type="text" class="form-control" name="user_name"value = "<?php echo $row['user_name'] ?> "placeholder="Enter Your Name">
                </label>
                <label class="w-50 ">
                    CNIC:
                    <input type="text" class="form-control" name="cnic"value="<?php echo $row['cnic'] ?>" placeholder="12345-678000-0">
                </label></div>
                <div class="d-flex">   
            <label class="w-50 ">
                     Father name:
                    <input type="text" class="form-control" name="user_fathername"value="<?php echo $row['user_fathername'] ?>" placeholder="Enter Your Father name">
                </label>
                <label class="w-50 ">
                    FATHER CNIC:
                    <input type="text" class="form-control" name="fathercnic"value="<?php echo $row['fathercnic'] ?>" placeholder="33100-000000-0">
                </label></div>
                <div class="d-flex">
                <label class="w-50 ">
                     Email:
                    <input type="email" class="form-control" name="user_email"value="<?php echo $row['user_email'] ?>"  placeholder="Email">
                </label>
                <label class="w-50 ">
                     Password:
                    <input type="password" class="form-control" name="user_password">
                </label></div>
                <div class="d-flex">
                <label class = "w-50 " name = "Gender" value="<?php echo $row['Gender'] ?>">
Gender: <br>
<input type="checkbox" >Male<br>
<input type="checkbox" >Female
                </label>
                <label class = "w-50 "  name="Study" value="<?php echo $row['Study'] ?>">
                Educational Level:<br>
               
  <input class="form-check-input" type="radio">
  
   Metric
 <br>

  <input class="form-check-input" type="radio" >
  
   Inter

</label>
</div>
                <label class="w-100 ">
                    Address:
                   
  <textarea class="form-control"name = "address" value="<?php echo $row['address'] ?>" placeholder="Leave a comment here" style="height: 100px"></textarea>
 
                </label>

              
                <input type="submit" name="formupdate" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>

</div>