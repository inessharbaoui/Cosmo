<?php
include_once 'conn.php';

// Check if the user is logged in (You can modify this based on your authentication mechanism)
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login_admin.php");
    exit();
}

// Function to fetch all products
function getAllProducts($conn) {
    $result = mysqli_query($conn, "SELECT * FROM products");

    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function displayProductRow($product) {
    echo "<tr>";
    echo "<td>{$product['id']}</td>";
    echo "<td>{$product['name']}</td>";
    echo "<td>{$product['description']}</td>";
    echo "<td>{$product['price']}</td>";
    echo "<td><a href='editproduct.php?id={$product['id']}' class='btn btn-warning btn-sm'>Edit</a></td>";
    echo "<td><a href='deleteproduct.php?id={$product['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\");'>Delete</a></td>";
    echo "</tr>";
}

// Handle adding a new product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name']) && isset($_POST['price'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = floatval($_POST['price']);

    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)";

    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }
}

// Fetch all products
$products = getAllProducts($conn);
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
            padding: 20px;
        }

        h2 {
            color: #343a40;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-left: 10px;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
    <title>Manage Products</title>
</head>

<body>
    <div class="container">
        <h2 class="mb-4">Manage Products</h2>

        <form action="processproducts" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="form-label">Product Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price:</label>
                <input type="number" id="price" name="price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Product Image:</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <?php displayProductRow($product); ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
