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
            <legend><center>Lips Quiz</center></legend>
                <div class="form-group">
                    <label for="lipscondition" class="form-label mt-4">How would you describe the current condition of your lips?</label>
                    <select class="form-select" id="lipscondition" name="lipscondition"> 
                        <option>Dry</option>
                        <option>Chapped</option>
                        <option>Normal</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lipcareroutine" class="form-label mt-4">Do you have a specific routine for lip care?</label>
                    <textarea class="form-control" id="lipcareroutine" rows="3"  name="lipcareroutine" ></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">How often do you use lip balm or moisturizer?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lipbalmfrequency" id="lipBalmFreq1" value="Daily" checked="">
                        <label class="form-check-label" for="lipBalmFreq1">
                            Daily
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lipbalmfrequency" id="lipBalmFreq2" value="Weekly">
                        <label class="form-check-label" for="lipBalmFreq2">
                            Weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lipbalmfrequency" id="lipBalmFreq3" value="Rarely">
                        <label class="form-check-label" for="lipBalmFreq3">
                            Rarely
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="lipconcerns" class="form-label mt-4">Do you have any specific concerns about your lips? (e.g., pigmentation, fine lines)</label>
                    <textarea class="form-control" id="lipconcerns" rows="3" name="lipconcerns"></textarea>
                </div>
                <div class="form-group">
                    <label for="lipcareproducts" class="form-label mt-4">Have you used any specific lip care products? If yes, please specify.</label>
                    <textarea class="form-control" id="lipcareproducts" rows="3" name="lipcareproducts"></textarea>
                </div>
                <div class="form-group">
      <label for="lippic" class="form-label mt-4">Provide us with a picture describing your lips condition </label>
      <input class="form-control" type="file" id="lippic" name="lippic">
    </div><div class="form-group">
    <label for="date" class="form-label mt-4">Date of Test</label>
    <input type="date" class="form-control" id="date" name="date" required>
</div>
                <button type="submit" value="liptest" name="liptest"class="btn btn-primary mt-3" >Submit</button>
            </div>
            
        </fieldset>
    </form>
</body>
</html>
