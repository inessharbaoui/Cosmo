
<?php
include_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "DELETE FROM products WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully!";
        header("Location: manage_products.php");
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>