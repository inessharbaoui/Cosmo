<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
    <script src="jquery-3.7.1.min.js"></script>
    <title>Face Products Store</title>
    <style>
.slide {
    max-width: 100%;
}

.slideshow {
    max-width: 400px;
    margin: auto;
    overflow: hidden;
}

.slide-image {
    width: 100%; 
    height: auto; 
}




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
.jumbotron p {
    font-size: 1.2em;
    color: #777; 
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

        <h1 class="text-center mb-5"> Your Ultimate Destination for Exceptional Face Products!</h1>
        <div class="container mt-5">
    <h2 class="text-center mb-5">Featured Products</h2>
    <div id="slideshow" class="slideshow">
        <div class="slide">
            <img src="1a3f1352341602713ef3f85927b5b5e7.jpg" alt="Slide 1" class="slide-image">
            <p class="slide-description">Gentle toner for smooth and balanced skin.</p>
        </div>
        <div class="slide">
            <img src="p5.jpg" alt="Slide 2" class="slide-image">
            <p class="slide-description">Simple, effective, and affordable skincare solutions.</p>
        </div>
        <div class="slide">
            <img src="p11.jpg" alt="Slide 3" class="slide-image">
            <p class="slide-description">Cleanser for a refreshing and moisturizing experience.</p>
        </div>
        <div class="slide">
            <img src="p6.jpg" alt="Slide 4" class="slide-image">
            <p class="slide-description">Energize your skin with Garnier's SkinActive products.</p>
        </div>
        <div class="slide">
            <img src="p5.jpg" alt="Slide 5" class="slide-image">
            <p class="slide-description">Simple, effective, and affordable skincare solutions.</p>
        </div>
        <div class="slide">
            <img src="p2.jpg" alt="Slide 6" class="slide-image">
            <p class="slide-description">Effective skincare with advanced formulations.</p>
        </div>
    </div>
</div>

<script>
    function initSlideshow() {
        var slides = document.querySelectorAll('.slide');
        var currentSlide = 0;

        function showSlide(index) {
            slides.forEach(function (slide, i) {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        setInterval(nextSlide, 2000);

        showSlide(currentSlide);
    }
    document.addEventListener("DOMContentLoaded", function () {
        initSlideshow();
    });
</script>
<div><h3><pre>
    
<center>Available on stock </center>
</pre></h3></div>

        <div class="row">
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="p11.jpg" class="card-img-top product-image" alt="Cerave">
                    <div class="card-body">
                        <h5 class="card-title">Cerave</h5>
                        <p class="card-text">Cleanser for a refreshing and moisturizing experience.</p>
                        <p class="card-text"><strong>$24.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="p2.jpg" class="card-img-top product-image" alt="La Roche-Posay">
                    <div class="card-body">
                        <h5 class="card-title">La Roche-Posay</h5>
                        <p class="card-text">Effective skincare with advanced formulations.</p>
                        <p class="card-text"><strong>$19.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="rice.jpg" class="card-img-top product-image" alt="Rice Water Bright">
                    <div class="card-body">
                        <h5 class="card-title">Rice Water Bright</h5>
                        <p class="card-text">Revitalize your skin with the power of rice water.</p>
                        <p class="card-text"><strong>$29.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="p4.jpg" class="card-img-top product-image" alt="Cerave Toner">
                    <div class="card-body">
                        <h5 class="card-title">Cerave Toner</h5>
                        <p class="card-text">Gentle toner for smooth and balanced skin.</p>
                        <p class="card-text"><strong>$34.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="p5.jpg" class="card-img-top product-image" alt="The Ordinary">
                    <div class="card-body">
                        <h5 class="card-title">The Ordinary</h5>
                        <p class="card-text">Simple, effective, and affordable skincare solutions.</p>
                        <p class="card-text"><strong>$22.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card product-card">
                    <img src="p6.jpg" class="card-img-top product-image" alt="Garnier SkinActive">
                    <div class="card-body">
                        <h5 class="card-title">Garnier SkinActive</h5>
                        <p class="card-text">Energize your skin with Garnier's SkinActive products.</p>
                        <p class="card-text"><strong>$27.99</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" integrity="sha384-9a4e6K3ZIn1ealj97Wd5sCU1IdpWpSR5EgF8FPP/EP+" crossorigin="anonymous"></script>
</body>

</html>
