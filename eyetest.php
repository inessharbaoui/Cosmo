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
<form action="processtests.php" method="post"  enctype="multipart/form-data">
        <fieldset><div class="container my-4">
            <legend><center>Eye Quiz</center></legend>
                <div class="form-group">
                    <label for="eyeCondition" class="form-label mt-4">How would you describe the current condition of your eyes?</label>
                    <select class="form-select" id="eyeCondition" name="eyeCondition">
                        <option>Dry</option>
                        <option>Watery</option>
                        <option>Normal</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eyeCareRoutine" class="form-label mt-4">Do you have a specific routine for eye care?</label>
                    <textarea class="form-control" id="eyeCareRoutine" rows="3" name="eyeCareRoutine" ></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">How often do you use eye drops or artificial tears?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="eyeDropsFrequency" id="eyeDropsFreq1" value="Daily" checked="">
                        <label class="form-check-label" for="eyeDropsFreq1">
                            Daily
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="eyeDropsFrequency" id="eyeDropsFreq2" value="Weekly">
                        <label class="form-check-label" for="eyeDropsFreq2">
                            Weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="eyeDropsFrequency" id="eyeDropsFreq3" value="Rarely">
                        <label class="form-check-label" for="eyeDropsFreq3">
                            Rarely
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="eyeConcerns" class="form-label mt-4">Do you have any specific concerns about your eyes? (e.g., redness, irritation)</label>
                    <textarea class="form-control" name="eyeConcerns" id="eyeConcerns" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="eyeCareProducts" class="form-label mt-4">Have you used any specific eye care products? If yes, please specify.</label>
                    <textarea class="form-control" name="eyeCareProducts" id="eyeCareProducts" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="eyeConditionPic" class="form-label mt-4">Provide us with a picture describing your eye condition </label>
                    <input class="form-control" type="file" name="eyeConditionPic" id="eyeConditionPic">
                </div> 
                <div class="form-group">
    <label for="date" class="form-label mt-4">Date of Test</label>
    <input type="date" class="form-control" id="date" name="date" required>
</div>
                <button type="submit" name="eyetest" value="eyetest" class="btn btn-primary mt-3">Submit</button>
            </div>
          
        </fieldset>
    </form>
</body>
</html>
