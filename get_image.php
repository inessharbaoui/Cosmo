<?php
include_once 'conn.php';

if (isset($_GET['testType']) && isset($_GET['testId'])) {
    $testType = mysqli_real_escape_string($conn, $_GET['testType']);
    $testId = mysqli_real_escape_string($conn, $_GET['testId']);

    // Adjust the column name based on your table structure
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

    $sql = "SELECT $imageColumn FROM $testType WHERE id = $testId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && isset($row[$imageColumn])) {
            header('Content-Type: image/jpeg');
            echo base64_decode($row[$imageColumn]);
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
