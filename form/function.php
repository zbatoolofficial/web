<?php

if (isset($_POST['formsubmit'])) {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $pass = $_POST['userphone'];
    echo $name;
    echo $email;
    echo $pass;
    //    echo '<script type="text/javascript">';
    // echo ' alert("Not Submit form")';  //not showing an alert box.
    // echo '</script>';
} else{
 
    // alert("Hello World");

    // function alert($msg) {
    //     echo "<script type='text/javascript'>alert('$msg');</script>";
    // }
}

// $name = "OK";
// echo "$name";
// if(isset($_POST['formsubmit'])){
// echo $_POST['username'];
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name ="OK" ;
//     if (empty($name)) {
//       echo "Name is empty";
//     } else {
//       echo $name;
//     }
//   }
?>