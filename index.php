<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">

    <script src="jquery-3.7.1.min.js"></script>

    <script src="jquery.lettering.js"></script>
    <script src="jquery.textillate.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cosmo.css">
    <link rel="stylesheet" href="cosmo1.css">


    <style>
        .text-animation {
            text-align: center;
            margin-top: 50px;
        }

        .text-animation h1 {
            font-family: 'Pacifico', cursive;
            font-size: 3em;
            color: white;
            margin-bottom: 20px;
        }

        .text-animation p {
            font-size: 1.5em;
            color: #555;
            margin-bottom: 40px;
        }

        .overlay {































            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <title>beauty access</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const backgrounds = ["a1.jpg", "oo.jpg", "ooooo.jpg", "hh2"];
            let currentIndex = 0;

            function changeBackground() {
                document.body.style.backgroundImage = `url("${backgrounds[currentIndex]}")`;
                currentIndex = (currentIndex + 1) % backgrounds.length;
            }
            changeBackground();
            setInterval(changeBackground, 5000);
        });
        $(document).ready(function() {

            $('.nav-link.dropdown-toggle.virtual-test').on('click', function() {
                $('.dropdown-menu.virtual-test').slideToggle();
                $('.dropdown-menu.products').slideUp();
            });


            $('.nav-link.dropdown-toggle.products').on('click', function() {
                $('.dropdown-menu.products').slideToggle();
                $('.dropdown-menu.virtual-test').slideUp();
            });
        });
    </script>
    <style>
        .dropdown-menu.slide-up {
            display: none;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location:login.php");
    } ?>
    <?php
    if (isset($_SESSION["facetest"])) {
        echo $_SESSION["facetest"];
        unset($_SESSION["facetest"]);
    } ?>
    <?php
    if (isset($_SESSION["liptest"])) {
        echo $_SESSION["liptest"];
        unset($_SESSION["liptest"]);
    } ?>
    <?php
    if (isset($_SESSION["eyetest"])) {
        echo $_SESSION["eyetest"];
        unset($_SESSION["eyetest"]);
    } ?>
    <?php
    if (isset($_SESSION["hairtest"])) {
        echo $_SESSION["hairtest"];
        unset($_SESSION["hairtest"]);
    } ?>
    <?php
    if (isset($_SESSION["hygienetest"])) {
        echo $_SESSION["hygienetest"];
        unset($_SESSION["hygienetest"]);
    } ?>

    <?php
    if (isset($_SESSION["nailstest"])) {
        echo $_SESSION["nailstest"];
        unset($_SESSION["nailstest"]);
    } ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="pink icon.jpg" alt="Cosmetic Logo" height="30" class="d-inline-block align-text-top"> Cosmetic Beauty
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCosmetic" aria-controls="navbarCosmetic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCosmetic">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle virtual-test" id="virtualTestDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Virtual Test</a>

                        <div class="dropdown-menu slide-up virtual-test" aria-labelledby="virtualTestDropdown">
                            <a class="dropdown-item" href="facetest.php">Facial Analysis</a>
                            <a class="dropdown-item" href="eyetest.php">Eye Examination</a>
                            <a class="dropdown-item" href="hairtest.php">Hair and Scalp Health</a>
                            <a class="dropdown-item" href="hygienetest.php">Hygiene and Care</a>
                            <a class="dropdown-item" href="nailstest.php">Nail Health</a>
                            <a class="dropdown-item" href="liptest.php">Lip Care Assessment</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle products" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

                        <div class="dropdown-menu slide-up products" aria-labelledby="productsDropdown">
                            <a class="dropdown-item" href="productskin.php">Facial Products</a>
                            <a class="dropdown-item" href="producteye.php">Eye Products</a>
                            <a class="dropdown-item" href="producthair.php">Hair Products</a>
                            <a class="dropdown-item" href="care.php">Hygiene and Care Products</a>
                            <a class="dropdown-item" href="product.php"> Products</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mental.php">Mental Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout1.php">Logout</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="text-animation">
        <h1 class="tlt">Welcome to Our Beauty Center</h1>
    </div>
    </div>

</body>

</html>