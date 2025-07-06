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
    </style>
</head>

<body>
    <div class="container">
        <h2>View Tests</h2>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Online Center </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <form class="d-flex ml-auto" method="post" action="search_user.php">
                        <input class="form-control me-2" type="search" name="user_email" placeholder="Search by Email"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <?php
        session_start();
        include_once 'conn.php';

        if (!isset($_SESSION['id'])) {
            header("Location: login_admin.php");
            exit();
        }

        $testTypes = ["facetest", "liptest", "eyetest", "hairtest", "hygienetest", "nailstest"];

        foreach ($testTypes as $testType) {
            $sql = "SELECT * FROM $testType";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<h3>$testType Tests:</h3>";
                echo "<ul>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "ID: {$row['id']}, Date: {$row['date']} ";
                    echo "<a href='view_test_detail.php?testType=$testType&testId={$row['id']}'>View Details</a>";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Error fetching data from $testType table: " . mysqli_error($conn) . "</p>";
            }
        }

        mysqli_close($conn);
        ?>

    </div>
</body>

</html>
