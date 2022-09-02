<?php 
//  session_start();
 include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meat charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cart</title>
</head>
<body>
     <!-- <?php 
    //  print_r($_SESSION['cart'])  ?> --> 
     <div class="container-fluid mt-4">
        <div class="row d-flex">
            <div class="col-md-8">
    <div class="container">
        <div class="row"> 
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/03.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Ninja</h5>
    <p class="card-text">Price: Rs.450</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Crispy Burger">
    <input type="hidden" name="Price" value="450">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/04.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Ship Your Idea</h5>
    <p class="card-text">Price: Rs.350</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Patty Burger">
    <input type="hidden" name="Price" value="350">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/11.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Silhouette</h5>
    <p class="card-text">Price: Rs.250</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Zinger Burger">
    <input type="hidden" name="Price" value="250">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/14.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Happy Ninja</h5>
    <p class="card-text">Price: Rs.550</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Tower Burger">
    <input type="hidden" name="Price" value="550">
  </div>
</div> 
</form>
     </div>
  </div>
</div>
<!-- 2 -->
<div class="container mt-5">
        <div class="row"> 
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/11.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Ship Your Idea</h5>
    <p class="card-text">Price: Rs.550</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Ship Your Idea">
    <input type="hidden" name="Price" value="450">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/25.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Happy Ninja</h5>
    <p class="card-text">Price: Rs.350</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Happy Ninja">
    <input type="hidden" name="Price" value="350">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/03.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Silhouette</h5>
    <p class="card-text">Price: Rs.250</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Ninja Silhouette">
    <input type="hidden" name="Price" value="250">
  </div>
</div> 
</form>
     </div>
     <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="img/04.jpg" class="card-img-top">
<div class="card-body text-center">
    <h5 class="card-title">Happy Ninja</h5>
    <p class="card-text">Price: Rs.550</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-warning">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Tower Burger">
    <input type="hidden" name="Price" value="550">
  </div>
</div> 
</form>
     </div>
   
     
  </div>
</div>
</div>
<!-- bg-secondary -->
<div class="col-md-3 ">
<input class="form-control p-2 me-2 mt-2" type="search" placeholder="Search" aria-label="Search">
<h3 class="mt-3">Filter The Price</h3>
<label for="customRange3" class="form-label"></label>
<input type="range" class="form-range w-100 text-dark" min="0" max="5" step="0.5" id="customRange3">
<form class="d-flex mt-2">
  <button class="btn btn-warning" type="submit">Go</button>
  <h5 class="mt-1 ml-3 text-secondary">0 1000 0.00 To 1,000.00</h5>
      </form>
</div>
<!--  -->
</div>
</div>
</body>
</html>
<?php include_once "footer.php";
?>