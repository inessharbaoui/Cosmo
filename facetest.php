<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
</head>
<body>

<form action="processtests.php" method="post" enctype="multipart/form-data">
        <fieldset><div class="container my-4">
            <legend><center>Facial Care Quiz</center></legend>
                <div class="form-group">
                    <label for="skintype" class="form-label mt-4">How would you describe your skin type?</label>
                    <select class="form-select" id="skintype"  name="skintype">
                        <option>Dry</option>
                        <option>Oily</option>
                        <option>Combination</option>
                        <option>Normal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skinconcerns" class="form-label mt-4">Do you have any specific skin concerns? (e.g., acne, wrinkles)</label>
                    <textarea class="form-control" name="skinconcern" id="skinconcern" rows="3"></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">How would you rate your current skincare routine?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="skincarerate" id="skincareRating1" value="Excellent" checked="">
                        <label class="form-check-label" for="skincareRating1">
                            Excellent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="skincarerate" id="skincareRating2" value="Good">
                        <label class="form-check-label" for="skincareRating2">
                            Good
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="skincarerate" id="skincareRating3" value="Fair">
                        <label class="form-check-label" for="skincareRating3">
                            Fair
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="skincarerate" id="skincareRating4" value="Poor">
                        <label class="form-check-label" for="skincareRating4">
                            Poor
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="skincaregoal" class="form-label mt-4">What is your main skincare goal?</label>
                    <textarea class="form-control" name="skincaregoal"  id="skincaregoal" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="skinconditionpic" class="form-label mt-4">Provide us with a picture describing your skin condition:</label>
                    <input class="form-control" type="file" name="skinconditionpic" id="skinconditionpic">
                </div>
                <div class="form-group">
    <label for="date" class="form-label mt-4">Date of Test</label>
    <input type="date" class="form-control" id="date" name="date" required>
</div>
                <button type="submit" name="facetest" value="facetest" class="btn btn-primary mt-3">Submit</button>
            </div>
        </fieldset>
    </form>
</body>
</html>
