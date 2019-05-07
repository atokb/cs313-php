<?php
// define variables and set to empty values
$nameErr = $emailErr = $majorErr = $commentsErr = "";
$name = $email = $major = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["major"])) {
    $majorErr = "Major is required";
  } else {
    $major = test_input($_POST["major"]);
  }

  if (empty($_POST["places"])) {
    $majorErr = "Places is required";
  } else {
    $major = test_input($_POST["places"]);
  }

  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = test_input($_POST["website"]);
  }

}
?>

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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
    <input type="radio" name="major" value="compScience" <?php if (isset($major) && $major=="compScience") echo "checked";?>><br>
    <label for="major">Web Design and Development </label>
    <input type="radio" name="major" value="wdd" <?php if (isset($major) && $major=="wdd") echo "checked";?>><br>
    <label for="major">Computer Information Technology </label>
    <input type="radio" name="major" value="compTech" <?php if (isset($major) && $major=="compTech") echo "checked";?>><br>
    <label for="major">Computer Engineering </label>
    <input type="radio" name="major" value="compEngineering" <?php if (isset($major) && $major=="compEngineering") echo "checked";?>>
    </div>
    <hr>
    <div>
    <h3>Places Visited</h3>
    <label for="places">North America</label>
    <input type="checkbox" name="continent" value="northAmerica" <?php if (isset($places) && $places=="northAmerica") echo "checked";?>><br>
    <label for="places">South America</label>
    <input type="checkbox" name="continent" value="southAmerica" <?php if (isset($places) && $places=="southAmerica") echo "checked";?>><br>
    <label for="places">Europe</label>
    <input type="checkbox" name="continent" value="europe" <?php if (isset($places) && $places=="europe") echo "checked";?>><br>
    <label for="places">Asia</label>
    <input type="checkbox" name="continent" value="asia" <?php if (isset($places) && $places=="asia") echo "checked";?>><br>
    <label for="places">Australia</label>
    <input type="checkbox" name="continent" value="australia" <?php if (isset($places) && $places=="australia") echo "checked";?>><br>    
    <label for="places">Africa</label>
    <input type="checkbox" name="continent" value="africa" <?php if (isset($places) && $places=="africa") echo "checked";?>><br>
    <label for="places">Antarctica</label>
    <input type="checkbox" name="continent" value="antarctica" <?php if (isset($places) && $places=="antarctica") echo "checked";?>>
    </div>
    <hr>
    <div>
    <label for="comments">Comments</label><br>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
    <input type="submit" name="submit" value="submit">
    </div>
    </legend>
    </form>
</div>
</body>
</html>