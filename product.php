<?php
include_once 'conn.php';

// Function to fetch all products
function getAllProducts($conn) {
    $result = mysqli_query($conn, "SELECT * FROM products");

    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
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
    <link rel="stylesheet" href="cosmo.css">
    <script src="jquery-3.7.1.min.js"></script>
    <title> Products Store</title>
    <style>
        .jumbotron {
            background-color: white;
            padding: 10px 0;
            color: white;
        }

        .jumbotron h1 {
            font-family: 'Comic Sans MS', cursive;
            font-size: 4em;
            color: #ff69b4;
        }

        body {
            background-color: #fce6e6;
        }

        .product-card {
            margin-bottom: 20px;
        }

        .product-image {
            height: 400px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>

<body>
    <h1 class="text-center mb-5">Explore Our Products</h1>
    <h2 class="lead"><center>Explore a variety of high-quality products designed to meet your needs and enhance your lifestyle.</center></h2>
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="<?php echo $product['image_path']; ?>" class="card-img-top product-image" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <p class="card-text"><strong>$<?php echo $product['price']; ?></strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" integrity="sha384-9a4e6K3ZIn1ealj97Wd5sCU1IdpWpSR5EgF8FPP/EP+" crossorigin="anonymous"></script>
</body>

</html>
