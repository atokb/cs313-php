<?php
$nameErr = $emailErr = $majorErr = $commentsErr = "";
$name = $email = $major = $comments = "";

if {
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

<p>Name: <? echo $name ?></p>
<p>Where you've visited <?echo $continent ?></p>