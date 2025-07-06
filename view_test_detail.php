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

        .test-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
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
        <h2>Test Details</h2>
        
        <?php
        session_start();
        include_once 'conn.php';

        if (!isset($_SESSION['id'])) {
            header("Location: login_admin.php");
            exit();
        }

        if (isset($_GET['testType']) && isset($_GET['testId'])) {
            $testType = mysqli_real_escape_string($conn, $_GET['testType']);
            $testId = mysqli_real_escape_string($conn, $_GET['testId']);

            $sql = "SELECT * FROM $testType WHERE id = $testId";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    echo "<div class='test-details'>";
                    echo "<h3>Test Type: $testType</h3>";
                    echo "<p>ID: {$row['id']}</p>";
                    echo "<p>Date: {$row['date']}</p>";

                    foreach ($row as $field => $value) {
                        if ($field != 'id' && $field != 'date' && $field != 'base64Image' && $field != 'skinconditionpic') {
                            echo "<p>$field: $value</p>";
                        }
                    }

                    $imageColumn = '';

                    switch ($testType) {
                        case 'eyetest':
                            $imageColumn = 'eyeConditionPic';
                            break;
                        case 'facetest':
                            $imageColumn = 'skinconditionpic';
                            break;
                        case 'hairtest':
                            $imageColumn = 'hairConditionPic';
                            break;
                        case 'hygienetest':
                            $imageColumn = 'skinconditionpic';
                            break;
                        case 'liptest':
                            $imageColumn = 'lippic';
                            break;
                        case 'nailstest':
                            $imageColumn = 'nailConditionPic';
                            break;
                        default:
                            echo "Invalid test type";
                            exit();
                    }

                    if (isset($row[$imageColumn])) {
                        echo "<p>Test Image: <img src='get_image.php?testType=$testType&testId=$testId' alt='Test Image'></p>";
                    } else {
                        echo "<p>No image available</p>";
                    }

                    echo "</div>";
                } else {
                    echo "<p>Test not found</p>";
                }
            } else {
                echo "<p>Error fetching data: " . mysqli_error($conn) . "</p>";
            }
        } else {
            echo "<p>Invalid parameters</p>";
        }

        mysqli_close($conn);
        ?>
        <p><a href="javascript:history.back()">Go Back</a></p>
    </div>
</body>

</html>
