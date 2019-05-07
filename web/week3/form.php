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
<div class="jumbotron">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <legend>
    <h1>Leave a Review</h1>
    <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
    </div>
    <div>
    <label for="email">Email: </label>
    <input type="text" name="email">
    </div>
    <div>
    <h4>Major</h4>
    <label for="major">Computer Science </label>
    <input type="radio" name="major" value="compScience">
    <label for="major">Web Design and Development </label>
    <input type="radio" name="major" value="wdd">
    <label for="major">Computer Information Technology </label>
    <input type="radio" name="major" value="compTech">
    <label for="major">Computer Engineering </label>
    <input type="radio" name="major" value="compEngineering">
    </div>
    <div>
    <label for="comment" rows="5" cols="40">Computer Science </label>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
    </legend>
    </form>
</div>
</body>
</html>