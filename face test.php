<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
</head>
<body>
    <?php
if(isset($_SESSION["create"])){
    ?>
      <div class="alert alert-success">
          <?php 
          echo $_SESSION["create"];
          ?>
      </div>
      <?php
      unset($_SESSION["create"]);}
      ?>
       <?php
      if(isset($_SESSION["update"])){
      ?>
      <div class="alert alert-success">
          <?php 
          echo $_SESSION["update"];
          ?>
      </div>
      <?php
      unset($_SESSION["update"]);}
      ?>
      <?php
      if (isset($_SESSION["delete"])){
      ?>
      <div class="alert alert-success">
      <?php
          echo $_SESSION["delete"];
          ?>
      </div>
      <?php
      unset($_SESSION["delete"]);}
      ?>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
      
           
            <h3>Product list </h3>
            <div>
                <a href="createproduct.php" class="btn btn-primary">Add new product </a>
                 
            </div>
            <div>
<label for="l" >Label</label>
<input type="text" id="l" name="label" value="Enter the product label">
<label for="c" >Code</label>
<input type="text" id="c" name="code" value="Enter the product code"> 
<form>


            </div>
        </header>

</body>