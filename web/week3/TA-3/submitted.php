<?php
$nameErr = $emailErr = $majorErr = $commentsErr = "";
$name = $email = $major = $comments = "";

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

    $continents = $_POST["continents"];


  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = $_POST["comments"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Name: <?php echo $name ?></p>
<p>Where you've visited:
 <?php 
 foreach ($continents as $continent) {
    echo $continent.", ";
}
 ?>
 </p>
 <p>Major: <?php echo $major ?> </p>
</body>
</html>

