<?php
require_once('connect.php');
$errors=array();
$email='';
if(isset($_POST["submit"])) {
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();
    
    if (empty($fullName) OR empty($email) OR empty($password) OR 
    empty($passwordRepeat)) {
        array_push($errors,"All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password)<8) {
        array_push($errors,"Password must be at least 8 charactes long");
    }
    if ($password!==$passwordRepeat) {
        array_push($errors,"Password does not match");
    }
    
    // Check if email already exists only if no other errors
    if (count($errors) == 0) {
        $sql = "SELECT * FROM users WHERE email = '$email'"; 
        $result = mysqli_query($conn, $sql); 
        $rowCount = mysqli_num_rows($result);
        if($rowCount>0) {
            array_push($errors,"Email already exists!");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
</head>
<body>
<div class="container">
    <?php 
    if(isset($_POST["submit"])) {
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            // Registration is successful
            $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            } else {
                die("Oh no, a little beauty glitch! 🌼 Our glam squad is on it! ");
            }
        }
    }
    ?>

    <div class="container text-center mt-5">
        <img src="aaaa.jpg" alt="Cosmetic Logo" class="img-fluid mb-4" style="max-width: 300px;">
        <h2 class="mb-4">Register for Exclusive Beauty Access</h2>
        <form method="post">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>

            <div class="form-group">
                <label for="repeat_password">Repeat Password</label>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="Repeat your password">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div>
        <div><p>Already part of our beauty family? <a href="login.php">Sign in with your glam account!</a></p></div>
    </div>
</div>
</body>
</html>