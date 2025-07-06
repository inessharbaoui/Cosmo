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
        <fieldset>
            <div class="container my-4">
                <legend><center>Hair Quiz</center></legend>
                <div class="form-group">
                    <label for="hairCondition" class="form-label mt-4">How would you describe the current condition of your hair?</label>
                    <select class="form-select" id="hairCondition" name="hairCondition">
                        <option>Dry</option>
                        <option>Oily</option>
                        <option>Normal</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hairCareRoutine" class="form-label mt-4">Do you have a specific routine for hair care?</label>
                    <textarea class="form-control" id="hairCareRoutine" rows="3" name="hairCareRoutine"></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">How often do you wash your hair?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hairWashFrequency" id="hairWashFreq1" value="Daily" checked="">
                        <label class="form-check-label" for="hairWashFreq1">
                            Daily
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hairWashFrequency" id="hairWashFreq2" value="Weekly">
                        <label class="form-check-label" for="hairWashFreq2">
                            Weekly
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hairWashFrequency" id="hairWashFreq3" value="Monthly">
                        <label class="form-check-label" for="hairWashFreq3">
                            Monthly
                        </label>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="hairConcerns" class="form-label mt-4">Do you have any specific concerns about your hair? (e.g., frizz, dandruff)</label>
                    <textarea class="form-control" id="hairConcerns" rows="3" name="hairConcerns"></textarea>
                </div>
                <div class="form-group">
                    <label for="hairCareProducts" class="form-label mt-4">Have you used any specific hair care products? If yes, please specify.</label>
                    <textarea class="form-control" id="hairCareProducts" rows="3" name="hairCareProducts"></textarea>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label mt-4">Provide us with a picture describing your hair condition </label>
                    <input class="form-control" type="file" id="formFile" name="hairConditionPic"></div>
               <div class="form-group">
                    <label for="date" class="form-label mt-4">Date of Test</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div> 
                
                <button type="submit"  name="hairtest" class="btn btn-primary mt-3">Submit</button>
            </div>
        </fieldset>
    </form>
</body>

</html>
