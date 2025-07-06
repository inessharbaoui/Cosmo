<?php
include_once 'conn.php';

if (isset($_GET['testType']) && isset($_GET['testId'])) {
    $testType = mysqli_real_escape_string($conn, $_GET['testType']);
    $testId = mysqli_real_escape_string($conn, $_GET['testId']);

    $sql = "SELECT skinconditionpic FROM $testType WHERE id = $testId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row['skinconditionpic'])) {
            header('Content-Type: image/jpeg');
            echo base64_decode($row['skinconditionpic']);
            exit();
        } else {
            echo "Image not found";
        }
    } else {
        echo "Error fetching image: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
