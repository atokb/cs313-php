<?php
$currentPage = 'soak-start';

include 'db.php';

// $user = 'postgres';
// $password = '';
// $db = new PDO('pgsql:host=localhost;dbname=postgres', $user, $password);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // Check request method
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (!isset($_POST['firstName']) && !isset($_POST['lastName'] && isset($_POST['email']) && !isset($_POST['pass'])) {
//     header("Location: index.php");
//   } else {
//     $firstName = $_POST['firstName'];
//     $lastName = $_POST['lastName'];
    
//     $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

//     $db->query("INSERT INTO users(user_id, firstname, user_lname, user_email, user_password) VALUES ($firstName, $lastName, $email, $password)", {
//       header('Location: index.php');
//     });

//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
        <title>SOA-King - Start</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="soak.php">Strength Of A King</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage == 'soak-home') echo 'bg-info'; ?>" href="soak.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron"> 
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <span class="login100-form-title p-b-26">
                                Welcome to Your Royal Routine
                            </span>
                            <span class="login100-form-title p-b-48">
                                <i class="zmdi zmdi-font"></i>
                            </span>
                            <hr>

                            <div>
                                <h6>Select your Current Status to Proceed</h6>
                                <div></div>
                                <div class="wrap-input100 validate-input" data-validate = "Select a Weight Category">
                                    <label for="sel1">Weight Category</label>
                                    <select id="sel1" class="form-control" type="text" name="weight_category"> 
                                        <!-- <option value="weight_category">Indicate your Weight Category</option>
                                        <option value="120-150">120 - 150</option>
                                        <option value="150-180">150 - 180</option>
                                        <option value="180-200">180 - 200</option>
                                        <option value="200+">200+</option> -->
                                        <?php $statement = $db->query('SELECT * FROM weight_category');
                                                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                                                {
                                                echo '<option value="' . $row["weightID"] .'">' .  $row["category"] . '</option>';
                                                }
                                        ?>
                                    </select>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Select a Fitness Goal">
                                    <label for="sel2">Fitness Goal</label>
                                    <select id="sel2" class="form-control" type="text" name="goal">
                                        <option value="goal">Choose a Fitness Goal</option>
                                        <option value="healthy_living">Healthy Living</option>
                                        <option value="body_building">Body Building</option>
                                        <option value="weight_loss">Weight Loss</option>
                                    </select>
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                        <a href="soak_routine.php">	Become Royal</a>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>