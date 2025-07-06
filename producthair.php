<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
    <script src="jquery-3.7.1.min.js"></script>
    <title>Hair Products Store</title>
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
    <h1 class="text-center mb-5">Revitalize Your Hair with Our Premium Hair Products!</h1>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Featured Products</h2>
        <div id="slideshow" class="slideshow">
            <div class="slide">
                <img src="h1.jpg" alt="Slide 1" class="slide-image">
                <p class="slide-description">Nourishing shampoo for healthy and vibrant hair.</p>
            </div>
            <div class="slide">
                <img src="h2.jpg" alt="Slide 2" class="slide-image">
                <p class="slide-description">Repair and hydrate with our advanced hair conditioner.</p>
            </div>
            <div class="slide">
                <img src="h3.jpg" alt="Slide 3" class="slide-image">
                <p class="slide-description">Styling gel for a perfect and long-lasting hairstyle.</p>
            </div>
            <div class="slide">
                <img src="h4.jpg" alt="Slide 4" class="slide-image">
                <p class="slide-description">Natural hair oil for shine and frizz control.</p>
            </div>
            <div class="slide">
                <img src="h5.jpg" alt="Slide 5" class="slide-image">
                <p class="slide-description">Volumizing mousse for a fuller and bouncy hair look.</p>
            </div>
            <div class="slide">
                <img src="h6.jpg" alt="Slide 6" class="slide-image">
                <p class="slide-description">Effective hair serum for smooth and sleek strands.</p>
            </div>
        </div>
    </div>

    <div><h3><pre>
    
<center>Available on stock </center>
</pre></h3></div>

    <div class="row">
        <div class="col-md-4">
            <div class="card product-card">
                <img src="h1.jpg" class="card-img-top product-image" alt="Nourishing Shampoo">
                <div class="card-body">
                    <h5 class="card-title">Nourishing Shampoo 'curly hair'</h5>
                    <p class="card-text">Nourishing shampoo for healthy and vibrant hair.</p>
                    <p class="card-text"><strong>$16.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="h2.jpg" class="card-img-top product-image" alt="Hair Conditioner">
                <div class="card-body">
                    <h5 class="card-title">Hair Conditioner</h5>
                    <p class="card-text">Repair and hydrate with our advanced hair conditioner.</p>
                    <p class="card-text"><strong>$19.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="h3.jpg" class="card-img-top product-image" alt="Styling Gel">
                <div class="card-body">
                    <h5 class="card-title">Hair oil</h5>
                    <p class="card-text">Styling gel for a perfect and long-lasting hairstyle.</p>
                    <p class="card-text"><strong>$14.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="hair.jpg" class="card-img-top product-image" alt="Natural Hair Oil">
                <div class="card-body">
                    <h5 class="card-title">Natural Hair Oil</h5>
                    <p class="card-text">Natural hair oil for shine and frizz control.</p>
                    <p class="card-text"><strong>$22.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="h5.jpg" class="card-img-top product-image" alt="Volumizing Mousse">
                <div class="card-body">
                    <h5 class="card-title">Volumizing Mousse</h5>
                    <p class="card-text">Volumizing mousse for a fuller and bouncy hair look.</p>
                    <p class="card-text"><strong>$18.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card">
                <img src="h6.jpg" class="card-img-top product-image" alt="Hair Serum">
                <div class="card-body">
                    <h5 class="card-title">Hair Serum</h5>
                    <p class="card-text">Effective hair serum for smooth and sleek strands.</p>
                    <p class="card-text"><strong>$25.99</strong></p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
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
