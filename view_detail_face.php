<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head section here -->
    <style>
        .user-details {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .test-details {
            display: none;
            margin-left: 20px;
        }

        .test-link {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }

        #testList {
            list-style: none;
            padding: 0;
        }

        #testList li {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            margin-bottom: 10px;
        }

        #testDetails {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    include_once 'conn.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_email'])) {
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);

        // Perform a query to search for users with the given email
        $user_query = "SELECT * FROM users WHERE email = ?";
        $user_stmt = mysqli_prepare($conn, $user_query);

        if ($user_stmt) {
            mysqli_stmt_bind_param($user_stmt, "s", $user_email);
            mysqli_stmt_execute($user_stmt);
            $user_result = mysqli_stmt_get_result($user_stmt);

            if ($user_result) {
                if (mysqli_num_rows($user_result) > 0) {
                    while ($user_row = mysqli_fetch_assoc($user_result)) {
                        // Display user details
                        echo "<div class='user-details'>";
                        echo "<h3>User Details</h3>";
                        echo "<p>User ID: {$user_row['id']}</p>";
                        echo "<p>Name: " . (isset($user_row['name']) ? $user_row['name'] : 'Not available') . "</p>";
                        echo "<p>Email: {$user_row['email']}</p>";
                        echo "</div>";

                        // Now, let's fetch and display the tests for this user
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
                                        while ($test_row = mysqli_fetch_assoc($tests_result)) {
                                            // Display test details here
                                            echo "<p>";
                                            echo "<span class='test-link' onclick='toggleTestDetails(\"test-details-{$test_row['id']}\")'>View Test Details</span>";
                                            echo "<span id='test-details-{$test_row['id']}' class='test-details'>";
                                            echo "<p>Test Details for $test_type:</p>";
                                            echo "<p>Test ID: {$test_row['id']}</p>";
                                            // Add other test details as needed
                                            echo "</span>";
                                            echo "</p>";
                                        }
                                    } else {
                                        echo "<p>No $test_type tests found for this user.</p>";
                                    }

                                    mysqli_free_result($tests_result);
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

    <!-- Display a list of tests -->
    <ul id="testList">
        <li data-details="Details for Test 1">View Test Details</li>
        <li data-details="Details for Test 2">View Test Details</li>
        <li data-details="Details for Test 3">View Test Details</li>
        <!-- Add more tests as needed -->
    </ul>

    <!-- Display area for test details -->
    <div id="testDetails"></div>

    <script>
        // Get the test list and details container
        const testList = document.getElementById('testList');
        const testDetails = document.getElementById('testDetails');

        // Add click event listener to the test list
        testList.addEventListener('click', (event) => {
            // Check if the clicked element is an li
            if (event.target.tagName === 'LI') {
                // Get the details attribute value
                const details = event.target.getAttribute('data-details');

                // Update the test details container
                testDetails.textContent = details;
            }
        });

        // Function to toggle test details visibility
        function toggleTestDetails(testDetailsId) {
            const detailsElement = document.getElementById(testDetailsId);
            if (detailsElement) {
                detailsElement.style.display = detailsElement.style.display === 'none' ? 'block' : 'none';
            }
        }
    </script>
</body>

</html>
