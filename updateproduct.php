<?php
include_once 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['price'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = floatval($_POST['price']);

    $sql = "UPDATE products SET name = '$name', description = '$description', price = $price WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully!";
        header("Location: manage_products.php");
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);

?>