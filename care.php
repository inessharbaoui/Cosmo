<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
    <script src="jquery-3.7.1.min.js"></script>
    <title>Hygiene and Care Products Store</title>
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
    <h1 class="text-center mb-5">Explore Our Collection of Hygiene and Care Products!</h1>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Featured Products</h2>
        <div id="slideshow" class="slideshow">
            <div class="slide">
                <img src="hc3.jpg" alt="Slide 1" class="slide-image">
                <p class="slide-description">Gentle soap for a refreshing and clean feel.</p>
            </div>
            <div class="slide">
                <img src="hc2.jpg" alt="Slide 2" class="slide-image">
                <p class="slide-description">Hydrating hand sanitizer for on-the-go protection.</p>
            </div>
            <div class="slide">
                <img src="serum.jpg" alt="Slide 3" class="slide-image">
                <p class="slide-description">Soft and absorbent Serum for everyday use.</p>
            </div>
            <div class="slide">
                <img src="bodywash1.jpg" alt="Slide 4" class="slide-image">
                <p class="slide-description">Body Wash for everyday use.</p>
            </div>
            <div class="slide">
                <img src="bodywash2.jpg" alt="Slide 5" class="slide-image">
                <p class="slide-description">Body Wash for all-day freshness.</p>
            </div>
            <div class="slide">
                <img src="hc2.jpg" alt="Slide 6" class="slide-image">
                <p class="slide-description">Moisturizing body lotion for smooth and nourished skin.</p>
            </div>
        </div>
    </div>

    <div><h3><pre>
    
<center>Available on stock </center>
</pre></h3></div>

    <div class="row">
        <div class="col-md-4">
            <div class="card product-card">
                <img src="hc3.jpg" class="card-img-top product-image" alt="Gentle Soap">
                <div class="card-body">
                    <h5 class="card-title">Gentle Soap</h5>
                    <p class="card-text">Gentle soap for a refreshing and clean feel.</p>
                    <p class="card-text"><strong>$5.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="bodyoil.jpg" class="card-img-top product-image" alt="Hydrating Hand Sanitizer">
                <div class="card-body">
                    <h5 class="card-title">Body Oil</h5>
                    <p class="card-text">For a smoother skin texture.</p>
                    <p class="card-text"><strong>$8.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="bodywash1.jpg" class="card-img-top product-image" alt="Effective Mouthwash">
                <div class="card-body">
                    <h5 class="card-title">body wash</h5>
                    <p class="card-text">Body wash that leaves o a good scent.</p>
                    <p class="card-text"><strong>$6.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="serum.jpg" class="card-img-top product-image" alt="Soft Tissues">
                <div class="card-body">
                    <h5 class="card-title">Serum</h5>
                    <p class="card-text">Soft and absorbent Serum for everyday use.</p>
                    <p class="card-text"><strong>$3.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="bodywash2.jpg" class="card-img-top product-image" alt="Fragrance-free Deodorant">
                <div class="card-body">
                    <h5 class="card-title">Body Wash </h5>
                    <p class="card-text">Body Wash  for all-day freshness.</p>
                    <p class="card-text"><strong>$7.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="hc2.jpg" class="card-img-top product-image" alt="Moisturizing Body Lotion">
                <div class="card-body">
                    <h5 class="card-title">Moisturizing Body Lotion</h5>
                    <p class="card-text">Moisturizing body lotion for smooth and nourished skin.</p>
                    <p class="card-text"><strong>$12.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" integrity="sha384-9a4e6K3ZIn1ealj97Wd5sCU1IdpWpSR5EgF8FPP/EP+" crossorigin="anonymous"></script>
</body>

</html>
