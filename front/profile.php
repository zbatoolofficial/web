<?php
include_once 'header.php';
echo $row['name'];
$SELECT = "SELECT * FROM `profile` WHERE user_id ='$user_id'";
$query = mysqli_query($conn, $SELECT);
$row  = mysqli_fetch_array($query);
?>
<div class="container">
    <form action="function.php" method="POST">
        <input type="text" name="user_id" value="<?php echo $row['id'] ?>">
        <div class="row">
            <center><b> Edit Profile</b></center>
            <div class="col-md-6 ">
                <label for="">
                    Enter Your Name
                </label>

                <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" name="name" placeholder="Enter Your Name">
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Your Email
                </label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter Your Email" readonly>
            </div>
            <div class="col-md-6">
                <label for="">
                    Select Gender
                </label>
                <br>
                <input type="radio" class="" name="gender" value="Male" <?php
                                                                        if (empty($row['gender'])) {
                                                                            echo '';
                                                                        } else {

                                                                            if ($row['gender'] == 'Male') {
                                                                                echo 'checked';
                                                                            } else {
                                                                            }
                                                                        } ?>> Male
                <input type="radio" class="" name="gender" value="Female" <?php 
                if (empty($row['gender'])) {
                    echo '';
                } else {
                if ($row['gender'] == 'Female') {
                                                                                echo "checked";
                                                                            } else {
                                                                            }} ?>> Female
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Number
                </label>
                <input type="number" class="form-control" name="number" value="<?php echo $row['number']; ?>" placeholder="+92">
            </div>
            <div class="col-md-6">
                <label for="">
                    Enter Address
                </label>
                <textarea name="address" class="form-control" id="" cols="30" rows="2"><?php echo $row['address'] ?></textarea>
            </div>
            <div class="col-md-6">
                <label for="">Select City</label>
                <select name="city" class="form-select" id="">
                    <option value="FSD" <?php if ($row['city'] == 'FSD') {
                                            echo "selected";
                                        } ?>>Faislabad</option>
                    <option value="MLT" <?php if ($row['city'] == 'MLT') {
                                            echo "selected";
                                        } ?>>Multan</option>
                    <option value="LHR" <?php if ($row['city'] == 'LHR') {
                                            echo "selected";
                                        } ?>>Lahore</option>
                </select>
            </div>
            <div class="col-md-6">
                <br>
                <button class="btn btn-success" name="updateprofile">Update</button>
            </div>

        </div>
    </form>
</div>


<?php
include_once 'footer.php';
?>