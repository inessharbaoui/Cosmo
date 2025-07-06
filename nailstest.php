<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css"
        integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="cosmo.css">
</head>

<body>
    <form action="processtests.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="container my-4">
                <legend>
                    <center>Nail Care Quiz</center>
                </legend>
                <div class="form-group">
                    <label for="nailCondition" class="form-label mt-4">How would you describe the current condition
                        of your nails?</label>
                    <select class="form-select" id="nailCondition" name="nailCondition">
                        <option>Healthy</option>
                        <option>Brittle</option>
                        <option>Discolored</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nailCareRoutine" class="form-label mt-4">Describe your current nail care routine:</label>
                    <textarea class="form-control" id="nailCareRoutine" name="nailCareRoutine" rows="3"></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">How often do you trim or shape your nails?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nailTrimFrequency" id="nailTrimFreq1"
                            value="Weekly" checked="">
                        <label class="form-check-label" for="nailTrimFreq1">
                            Weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nailTrimFrequency" id="nailTrimFreq2"
                            value="Bi-weekly">
                        <label class="form-check-label" for="nailTrimFreq2">
                            Bi-weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="nailTrimFrequency" id="nailTrimFreq3"
                            value="Monthly">
                        <label class="form-check-label" for="nailTrimFreq3">
                            Monthly
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="nailConcerns" class="form-label mt-4">Do you have any specific concerns about your
                        nails? (e.g., ridges, spots)</label>
                    <textarea class="form-control" id="nailConcerns" name="nailConcerns" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="nailProductsUsed" class="form-label mt-4">List any specific nail care products you
                        regularly use:</label>
                    <textarea class="form-control" id="nailProductsUsed" name="nailProductsUsed" rows="3"></textarea>
                </div>  
                <div class="form-group">
                    <label for="nailConditionPic" class="form-label mt-4">Upload a picture of your nails:</label>
                    <input type="file" class="form-control" id="nailConditionPic" name="nailConditionPic" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="date" class="form-label mt-4">Date of Test</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <button type="submit" name="nailstest" class="btn btn-primary mt-3">Submit</button>
            </div>
        </fieldset>
    </form>
</body>

</html>
