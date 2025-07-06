<?php
session_start();
include_once 'conn.php';

if (isset($_SESSION['id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    // Check if the username already exists
    $checkExistingUser = "SELECT id FROM admins WHERE username = '$username'";
    $resultCheckUser = mysqli_query($conn, $checkExistingUser);

    if ($resultCheckUser && mysqli_num_rows($resultCheckUser) > 0) {
        $error_message = "Username already exists. Please choose a different one.";
    } else {
        // Username is unique, proceed with registration
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $_SESSION['id'] = mysqli_insert_id($conn);
            header("Location: dashboard.php");
            exit();
        } else {
            $error_message = "Registration failed. Please try again.";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <style>
        body {
            background-color: #fce6e6;
        }

        div {
            max-width: 400px;
            margin: auto;
            text-align: center;
            margin-top: 100px;
        }

        h2 {
            color: #343a40;
        }

        label {
            color: #343a40;
        }

        p {
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <h2>User Registration</h2>
        <?php if (isset($error_message)) : ?>
            <p><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="mt-3">Already have an account? <a href="login_admin.php">Login here</a></p>
    </div>
</body>

</html>
