<?php
$nameErr = $emailErr = $majorErr = $commentsErr = "";
$name = $email = $major = $comments = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }

  if (empty($_POST["major"])) {
    $majorErr = "Major is required";
  } else {
    $major = $_POST["major"];
  }

  if (empty($_POST["continent"])) {
    $majorErr = "continent is required";
  } else {
    $continent = $_POST["continent"];
  }

  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = $_POST["comments"];
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
    <h3>continent Visited</h3>
    <label for="continent">North America</label>
    <input type="checkbox" name="continent" value="northAmerica" <?php if (isset($continent) && $continent=="northAmerica") echo "checked";?>><br>
    <label for="continent">South America</label>
    <input type="checkbox" name="continent" value="southAmerica" <?php if (isset($continent) && $continent=="southAmerica") echo "checked";?>><br>
    <label for="continent">Europe</label>
    <input type="checkbox" name="continent" value="europe" <?php if (isset($continent) && $continent=="europe") echo "checked";?>><br>
    <label for="continent">Asia</label>
    <input type="checkbox" name="continent" value="asia" <?php if (isset($continent) && $continent=="asia") echo "checked";?>><br>
    <label for="continent">Australia</label>
    <input type="checkbox" name="continent" value="australia" <?php if (isset($continent) && $continent=="australia") echo "checked";?>><br>    
    <label for="continent">Africa</label>
    <input type="checkbox" name="continent" value="africa" <?php if (isset($continent) && $continent=="africa") echo "checked";?>><br>
    <label for="continent">Antarctica</label>
    <input type="checkbox" name="continent" value="antarctica" <?php if (isset($continent) && $continent=="antarctica") echo "checked";?>>
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