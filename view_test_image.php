<?php
include('connect.php');

if (isset($_GET['id']) && isset($_GET['column'])) {
    $id = $_GET['id'];
    $column = $_GET['column'];

    // Fetch the image data from the specified column
    $sql = "SELECT $column FROM new_card_requests WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Check for SQL errors
    if ($stmt === false) {
        die("Error in SQL query preparation: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    // Check for execution errors
    $result = mysqli_stmt_get_result($stmt);
    if ($result === false) {
        die("Error in SQL execution: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row && isset($row[$column])) {
        // Get image data and type
        $imageData = $row[$column];
        $imageType = 'image/jpeg'; // Adjust the image type based on your data

        // Convert BLOB data to base64
        $base64Image = base64_encode($imageData);
        $imageSrc = "data:$imageType;base64,$base64Image";
    } else {
        // If image data not found, display a placeholder image or handle the error
        $imageSrc = 'path/to/placeholder.jpg'; // Replace with the path to a placeholder image
    }

    mysqli_stmt_close($stmt);
} else {
    // Output an error message
    echo "Invalid parameters.";
    exit(); // Terminate the script to prevent further execution
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الصورة</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <style>
        body {
            background-color: #fce6e6;
            padding: 20px;
        }

        h2 {
            color: #343a40;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            display: block;
        }

        .image-container {
            max-width: 600px;
            margin-top: 10px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>عرض الصورة للطلب رقم <?php echo $id; ?></h2>

        <?php
        // Display the image
        echo "<div class='image-container'>";
        echo "<img src='$imageSrc' alt='Image' />";
        echo "</div>";
        ?>
    </div>
</body>

</html>
