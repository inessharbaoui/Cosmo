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
<?php
include_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_email'])) {
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);

    $user_query = "SELECT * FROM users WHERE email = ?";
    $user_stmt = mysqli_prepare($conn, $user_query);

    if ($user_stmt) {
        mysqli_stmt_bind_param($user_stmt, "s", $user_email);
        mysqli_stmt_execute($user_stmt);
        $user_result = mysqli_stmt_get_result($user_stmt);

        if ($user_result) {
            if (mysqli_num_rows($user_result) > 0) {
                while ($user_row = mysqli_fetch_assoc($user_result)) {
                 
                    echo "<div class='user-details'>";
                    echo "<h3>User Details</h3>";
                    echo "<p>User ID: {$user_row['id']}</p>";
                    echo "<p>Name: " . (isset($user_row['name']) ? $user_row['name'] : 'Not available') . "</p>";
                    echo "<p>Email: {$user_row['email']}</p>";
                    echo "</div>";

                    $user_id = $user_row['id'];
                    $test_types = ['eyetest', 'facetest', 'hairtest', 'hygienetest', 'liptest', 'nailstest'];

                    echo "<h2>User Tests</h2>";

                    foreach ($test_types as $test_type) {
                        $tests_query = "SELECT * FROM $test_type WHERE id = ?";
                        $tests_stmt = mysqli_prepare($conn, $tests_query);

                        if ($tests_stmt) {
                            mysqli_stmt_bind_param($tests_stmt, "i", $user_id);
                            mysqli_stmt_execute($tests_stmt);
                            $tests_result = mysqli_stmt_get_result($tests_stmt);

                            if ($tests_result) {
                                if (mysqli_num_rows($tests_result) > 0) {
                        
                                    echo "<p>";
                                    echo "<span class='test-link' onclick='toggleTestDetails(\"test-details-{$test_type}\")'>$test_type</span>";
                                    echo "<span id='test-details-{$test_type}' class='test-details'>";
                                    echo "<p>Test Details for $test_type:</p>";

                                    while ($test_row = mysqli_fetch_assoc($tests_result)) {
                                  
                                        echo "<p><strong>Test ID:</strong> {$test_row['id']}</p>";
                                 
                                        echo "<p><a href='view_test_detail.php?testType=$test_type&testId={$test_row['id']}'>View Test Details</a></p>";
                                    }

                                    echo "</span>";
                                    echo "</p>";

                                    mysqli_free_result($tests_result);
                                } else {
                                    echo "<p>No $test_type tests found for this user.</p>";
                                }
                            } else {
                                echo "<p>Error fetching $test_type tests: " . mysqli_error($conn) . "</p>";
                            }
                        } else {
                            echo "<p>Error preparing $test_type statement: " . mysqli_error($conn) . "</p>";
                        }
                    }
                }
            } else {
                echo "<p>No user found with the provided email.</p>";
            }

            mysqli_free_result($user_result);
        } else {
            echo "<p>Error searching for user: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<p>Error preparing user statement: " . mysqli_error($conn) . "</p>";
    }
}
?>

