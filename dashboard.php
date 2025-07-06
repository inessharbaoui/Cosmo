
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarColor04">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
<div class="col-md-6">
    <a href="view_tests.php" class="btn btn-info btn-lg btn-block">View Tests</a>
</div>
            <div class="col-md-6">
                <a href="manage_products.php" class="btn btn-success btn-lg btn-block">Manage Products</a>
            </div>
        </div>
    </div>

</body>

</html>
