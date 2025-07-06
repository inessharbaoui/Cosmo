<?php
include('connect.php');

if (isset($_POST["facetest"])) {
    if (isset($_POST['skintype'], $_POST['skinconcern'], $_POST['skincarerate'], $_POST['skincaregoal'], $_FILES['skinconditionpic']['tmp_name'])) {

        if ($_FILES['skinconditionpic']['error'] === UPLOAD_ERR_OK) {
            $skintype = mysqli_real_escape_string($conn, $_POST['skintype']);
            $skinconcern = mysqli_real_escape_string($conn, $_POST['skinconcern']);
            $skincarerate = mysqli_real_escape_string($conn, $_POST['skincarerate']);
            $skincaregoal = mysqli_real_escape_string($conn, $_POST['skincaregoal']);

            $imageData = file_get_contents($_FILES['skinconditionpic']['tmp_name']);
            $base64Image = base64_encode($imageData);


            $sqlinsert = "INSERT INTO facetest (skintype, skinconcern, skincarerate, skincaregoal, skinconditionpic, date)
                            VALUES ('$skintype', '$skinconcern', '$skincarerate', '$skincaregoal', '$base64Image', NOW())";

            if (mysqli_query($conn, $sqlinsert)) {
                echo "Record inserted successfully";
                session_start();
                $_SESSION["facetest"] = "Facial Care Quiz Submitted Successfully!";
                header("Location: index.php");
                exit();
            }}
    }
}


if (isset($_POST["liptest"])) {
    if (isset($_POST['lipscondition'], $_POST['lipcareroutine'], $_POST['lipbalmfrequency'], $_POST['lipconcerns'], $_POST['lipcareproducts'], $_FILES['lippic']['tmp_name'])) {
        if ($_FILES['lippic']['error'] === UPLOAD_ERR_OK) {
            $lipscondition = mysqli_real_escape_string($conn, $_POST['lipscondition']);
            $lipcareroutine = mysqli_real_escape_string($conn, $_POST['lipcareroutine']);
            $lipbalmfrequency = mysqli_real_escape_string($conn, $_POST['lipbalmfrequency']);
            $lipconcerns = mysqli_real_escape_string($conn, $_POST['lipconcerns']);
            $lipcareproducts = mysqli_real_escape_string($conn, $_POST['lipcareproducts']);

            $imageData = file_get_contents($_FILES['lippic']['tmp_name']);
            $base64Image = base64_encode($imageData);

            $sqlinsert = "INSERT INTO liptest (lipscondition, lipcareroutine, lipbalmfrequency, lipconcerns, lipcareproducts, lippic, date)
                            VALUES ('$lipscondition', '$lipcareroutine', '$lipbalmfrequency', '$lipconcerns', '$lipcareproducts', '$base64Image', NOW())";

            if (mysqli_query($conn, $sqlinsert)) {
                echo "Record inserted successfully";
                session_start();
                $_SESSION["liptest"] = "Lip Test Submitted Successfully!";
                header("Location: index.php");
                exit();
            }
        }
    }}



    if (isset($_POST["eyetest"])) {
        if (isset($_POST['eyeCondition'], $_POST['eyeCareRoutine'], $_POST['eyeDropsFrequency'], $_POST['eyeConcerns'], $_POST['eyeCareProducts'], $_FILES['eyeConditionPic']['tmp_name'])) {
    
            if ($_FILES['eyeConditionPic']['error'] === UPLOAD_ERR_OK) {
                $eyeCondition = mysqli_real_escape_string($conn, $_POST['eyeCondition']);
                $eyeCareRoutine = mysqli_real_escape_string($conn, $_POST['eyeCareRoutine']);
                $eyeDropsFrequency = mysqli_real_escape_string($conn, $_POST['eyeDropsFrequency']);
                $eyeConcerns = mysqli_real_escape_string($conn, $_POST['eyeConcerns']);
                $eyeCareProducts = mysqli_real_escape_string($conn, $_POST['eyeCareProducts']);
    
                $imageData = file_get_contents($_FILES['eyeConditionPic']['tmp_name']);
                $base64Image = base64_encode($imageData);
    
                    $sqlinsert = "INSERT INTO eyetest(eyeCondition, eyeCareRoutine, eyeDropsFrequency, eyeConcerns, eyeCareProducts, eyeConditionPic, date)
                                    VALUES ('$eyeCondition', '$eyeCareRoutine', '$eyeDropsFrequency', '$eyeConcerns', '$eyeCareProducts', '$base64Image', NOW())";
    
                    if (mysqli_query($conn, $sqlinsert)) {
                        echo "Record inserted successfully";
                        session_start();
                        $_SESSION["eyetest"] = "Eye Test Submitted Successfully!";
                        header("Location: index.php");
                        exit();
                    }
                }
            }
        }
    
        if (isset($_POST["hairtest"])) {
            if (isset($_POST['hairCondition'], $_POST['hairCareRoutine'], $_POST['hairWashFrequency'], $_POST['hairConcerns'], $_POST['hairCareProducts'], $_FILES['hairConditionPic']['tmp_name'])) {
        
                if ($_FILES['hairConditionPic']['error'] === UPLOAD_ERR_OK) {
                    $hairCondition = mysqli_real_escape_string($conn, $_POST['hairCondition']);
                    $hairCareRoutine = mysqli_real_escape_string($conn, $_POST['hairCareRoutine']);
                    $hairWashFrequency = mysqli_real_escape_string($conn, $_POST['hairWashFrequency']);
                    $hairConcerns = mysqli_real_escape_string($conn, $_POST['hairConcerns']);
                    $hairCareProducts = mysqli_real_escape_string($conn, $_POST['hairCareProducts']);
        
                    $imageData = file_get_contents($_FILES['hairConditionPic']['tmp_name']);
                    $base64Image = base64_encode($imageData);
        
                    $sqlinsert = "INSERT INTO hairtest (hairCondition, hairCareRoutine, hairWashFrequency, hairConcerns, hairCareProducts, hairConditionPic, date)
                                    VALUES ('$hairCondition', '$hairCareRoutine', '$hairWashFrequency', '$hairConcerns', '$hairCareProducts', '$base64Image', NOW())";
        
                    if (mysqli_query($conn, $sqlinsert)) {
                        echo "Record inserted successfully";
                        session_start();
                        $_SESSION["hairtest"] = "Hair Test Submitted Successfully!";
                        header("Location: index.php");
                        exit();
                    }
                }
            }
        }

 
        session_start();
        
        if (isset($_POST["hygienetest"])) {
            if (isset($_POST['handWashingFrequency'], $_POST['bathingFrequency'], $_POST['oralHygieneRoutine'], $_POST['nailCareRoutine'], $_POST['overallHygieneConcerns'], $_POST['hygieneProductsUsed'], $_POST['date'])) {
        
                $handWashingFrequency = mysqli_real_escape_string($conn, $_POST['handWashingFrequency']);
                $bathingFrequency = mysqli_real_escape_string($conn, $_POST['bathingFrequency']);
                $oralHygieneRoutine = mysqli_real_escape_string($conn, $_POST['oralHygieneRoutine']);
                $nailCareRoutine = mysqli_real_escape_string($conn, $_POST['nailCareRoutine']);
                $overallHygieneConcerns = mysqli_real_escape_string($conn, $_POST['overallHygieneConcerns']);
                $hygieneProductsUsed = mysqli_real_escape_string($conn, $_POST['hygieneProductsUsed']);
                $date = mysqli_real_escape_string($conn, $_POST['date']);
        
                $sqlInsert = "INSERT INTO hygienetest (handWashingFrequency, bathingFrequency, oralHygieneRoutine, nailCareRoutine, overallHygieneConcerns, hygieneProductsUsed, date)
                VALUES ('$handWashingFrequency', '$bathingFrequency', '$oralHygieneRoutine', '$nailCareRoutine', '$overallHygieneConcerns', '$hygieneProductsUsed', NOW())";
  
        
                if (mysqli_query($conn, $sqlInsert)) {
                    echo "Record inserted successfully";
                    $_SESSION["hygienetest"] = "Hygiene Test Submitted Successfully!";
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($conn);//to show errors 
                }
            }
        }

        if (isset($_POST["nailstest"])) {
            if (isset($_POST['nailCondition'], $_POST['nailCareRoutine'], $_POST['nailTrimFrequency'], $_POST['nailConcerns'], $_POST['nailProductsUsed'], $_FILES['nailConditionPic']['tmp_name'])) {
        
                if ($_FILES['nailConditionPic']['error'] === UPLOAD_ERR_OK) {
                    $nailCondition = mysqli_real_escape_string($conn, $_POST['nailCondition']);
                    $nailCareRoutine = mysqli_real_escape_string($conn, $_POST['nailCareRoutine']);
                    $nailTrimFrequency = mysqli_real_escape_string($conn, $_POST['nailTrimFrequency']);
                    $nailConcerns = mysqli_real_escape_string($conn, $_POST['nailConcerns']);
                    $nailProductsUsed = mysqli_real_escape_string($conn, $_POST['nailProductsUsed']);
        
                    $imageData = file_get_contents($_FILES['nailConditionPic']['tmp_name']);
                    $base64Image = base64_encode($imageData);
        
                    $sqlInsert = "INSERT INTO nailstest(nailCondition, nailCareRoutine, nailTrimFrequency, nailConcerns, nailProductsUsed, nailConditionPic, date)
                                    VALUES ('$nailCondition', '$nailCareRoutine', '$nailTrimFrequency', '$nailConcerns', '$nailProductsUsed', '$base64Image', NOW())";
        
                    if (mysqli_query($conn, $sqlInsert)) {
                        echo "Record inserted successfully";
                        session_start();
                        $_SESSION["nailstest"] = "Nail Test Submitted Successfully!";
                        header("Location: index.php");
                        exit();
                    }
                }
                else {
                    echo "Error: " . mysqli_error($conn);//to show errors 
                }  }
        }
        
         
?>

