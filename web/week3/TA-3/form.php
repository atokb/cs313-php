<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Hackz</title>
</head>
<body>
<div class="jumbotron container">
    <form action="submitted.php" method="post">
    <legend>
    <h1>Leave a Review</h1>
    <div class=form-group>
    <label for="name">Name: </label>
    <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
    </div>
    <div class=form-group>
    <label for="email">Email: </label>
    <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
    </div>
    <div>
    <hr>
    <h3>Major</h3>
    <label for="major">Computer Science </label>
    <input type="radio" name="major" value="Computer Science" <?php if (isset($major) && $major=="Computer Science") echo "checked";?>><br>
    <label for="major">Web Design and Development </label>
    <input type="radio" name="major" value="Web Design and Development" <?php if (isset($major) && $major=="Web Design and Development") echo "checked";?>><br>
    <label for="major">Computer Information Technology </label>
    <input type="radio" name="major" value="Computer Technology" <?php if (isset($major) && $major=="Computer Technology") echo "checked";?>><br>
    <label for="major">Computer Engineering </label>
    <input type="radio" name="major" value="Computer Engineering" <?php if (isset($major) && $major=="Computer Engineering") echo "checked";?>>
    </div>
    <hr>
    <div>
    <h3>Continents Visited</h3>
    <label for="continents">North America</label>
    <input type="checkbox" name="continents[]" value="North America" <?php if (isset($continents) && $continents=="North America") echo "checked";?>><br>
    <label for="continents">South America</label>
    <input type="checkbox" name="continents[]" value="South America" <?php if (isset($continents) && $continents=="South America") echo "checked";?>><br>
    <label for="continents">Europe</label>
    <input type="checkbox" name="continents[]" value="Europe" <?php if (isset($continents) && $continents=="Europe") echo "checked";?>><br>
    <label for="continents">Asia</label>
    <input type="checkbox" name="continents[]" value="Asia" <?php if (isset($continents) && $continents=="Asia") echo "checked";?>><br>
    <label for="continents">Australia</label>
    <input type="checkbox" name="continents[]" value="Australia" <?php if (isset($continents) && $continents=="Australia") echo "checked";?>><br>    
    <label for="continents">Africa</label>
    <input type="checkbox" name="continents[]" value="Africa" <?php if (isset($continents) && $continents=="Africa") echo "checked";?>><br>
    <label for="continents">Antarctica</label>
    <input type="checkbox" name="continents[]" value="Antarctica" <?php if (isset($continents) && $continents=="Antarctica") echo "checked";?>>
    </div>
    <hr>
    <div>
    <label for="comments">Comments</label><br>
    <textarea name="comments" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
    <input type="submit" name="submit" value="submit">
    </div>
    </legend>
    </form>
</div>
</body>
</html>