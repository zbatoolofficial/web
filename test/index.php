<?php include_once 'header.php';
include_once 'connection.php' ;
$select = "SELECT * FROM register";
$Query = mysqli_query($conn,$select);
?>

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
                    <input type="text" class="form-control" name="user_name" placeholder="Enter Your Name">
                </label>
                <label class="w-50 ">
                    CNIC:
                    <input type="text" class="form-control" name="cnic" placeholder="12345-678000-0">
                </label></div>
                <div class="d-flex">   
            <label class="w-50 ">
                     Father name:
                    <input type="text" class="form-control" name="user_fathername" placeholder="Enter Your Father name">
                </label>
                <label class="w-50 ">
                    FATHER CNIC:
                    <input type="text" class="form-control" name="fathercnic" placeholder="33100-000000-0">
                </label></div>
                <div class="d-flex">
                <label class="w-50 ">
                     Email:
                    <input type="email" class="form-control" name="user_email" placeholder="Email">
                </label>
                <label class="w-50 ">
                     Password:
                    <input type="password" class="form-control" name="user_password" placeholder="">
                </label></div>
                <div class="d-flex">
                <label class = "w-50 " name = "Gender" value="<?php echo $row['Gender'] ?>">
Gender: <br>
<input type="checkbox" >Male<br>
<input type="checkbox" >Female
                </label>
                <label class = "w-50 "  name="Study">
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
                    
  <textarea class="form-control"name = "address" placeholder="Leave a comment here" style="height: 100px"></textarea>
 
                </label>

              
                
                <br>
                <center>
                <input type="submit" name="formsubmit" class="btn btn-primary mt-2">
</center>
            </form>
        </div>
    </div>
</div>
<!--  -->
<div class="row">
        <div class="col-md-12">
            <table class="table table-dark  mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">CNIC</th>
                        <th scope="col">Father</th>
                        <th scope="col">fathercnic</th>
                        <th scope="col">User Email</th>
                        <th scope="col">password</th>
                        <th scope="col">Radio</th>
                        <th scope="col">Check</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead> 
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($Query)) {
                       

                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td><?php echo $row['user_name']?></td>
                            <td><?php echo $row['cnic']?></td>
                            <td><?php echo $row['user_fathername']?></td>
                            <td><?php echo $row['fathercnic']?></td>
                            <td><?php echo $row['user_email']?></td>
                            <td><?php echo $row['user_password']?></td>
                            <td><?php echo $row['Study']?></td>
                            <td><?php echo $row['Gender']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><a href="edit.php?edit_id=<?php echo $row['id']?>"><button class="btn btn-primary">Edit</button></a>
                            <a href="del.php?del_id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
