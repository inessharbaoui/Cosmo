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
    <form action="processtests.php" method="post">
        <fieldset>
            <div class="container my-4">
                <legend><center>Hygiene Quiz</center></legend>
                <div class="form-group">
                    <label for="handWashingFrequency" class="form-label mt-4">How often do you wash your hands?</label>
                    <select class="form-select" id="handWashingFrequency" name="handWashingFrequency">
                        <option>Multiple times a day</option>
                        <option>Once a day</option>
                        <option>A few times a week</option>
                        <option>Rarely</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bathingFrequency" class="form-label mt-4">How often do you take a bath or shower?</label>
                    <select class="form-select" id="bathingFrequency" name="bathingFrequency">
                        <option>Every day</option>
                        <option>Every other day</option>
                        <option>A few times a week</option>
                        <option>Rarely</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="oralHygieneRoutine" class="form-label mt-4">Describe your oral hygiene routine:</label>
                    <textarea class="form-control" id="oralHygieneRoutine" name="oralHygieneRoutine" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="nailCareRoutine" class="form-label mt-4">Do you have a specific routine for nail care?</label>
                    <textarea class="form-control" id="nailCareRoutine" name="nailCareRoutine" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="overallHygieneConcerns" class="form-label mt-4">Do you have any specific concerns about your overall hygiene?</label>
                    <textarea class="form-control" id="overallHygieneConcerns" name="overallHygieneConcerns" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="hygieneProductsUsed" class="form-label mt-4">List any specific hygiene products you regularly use:</label>
                    <textarea class="form-control" id="hygieneProductsUsed" name="hygieneProductsUsed" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="date" class="form-label mt-4">Date of Test</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <button type="submit" name="hygienetest" value="hygienetest" class="btn btn-primary mt-3">Submit</button>
            </div>
        </fieldset>
    </form>
</body>
</html>
