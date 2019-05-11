<?php
session_start();
$currentPage = 'confirmation';

include('products-array.php');
include('customer-info.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="/main.css">    
    <title>Kings-Confirmation</title>
</head>
<body>
    <?php
    include('header.php');
  ?>
  <?php
    if ( isset($_SESSION["cart"]) ) {
    ?>
    <div class="jumbotron">
      <h2>Thanks For Your Purchase</h2>
      <h4>Purchase Summary</h4>
      <table>
        <tr>
          <th>Items</th>
          <th>&nbsp;</th>
          <th>Qty</th>
          <th>&nbsp;</th>
          <th>Price</th>
        </tr>
        <?php
        $total = 0;
        foreach ( $_SESSION["cart"] as $i ) {
        ?>
        <tr>
          <td><?php echo( $items[$_SESSION["cart"][$i]] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["price"][$i] ); ?></td>
          <td>&nbsp;</td>
        </tr>
        <?php
        $total = $total + $_SESSION["price"][$i];
        }
        $_SESSION["total"] = $total;
        ?>
        <tr>
          <td colspan="7">Total Price : <?php echo($total); ?></td>
        </tr>
      </table>
      <?php
      }
      ?>
      <hr>
      <h4>Shipping Information</h4>
      <div>
      <form>
          <div class="col-50">
            <div class="form-group">
              <label for="firstname"><i class=""></i> First Name: <?php echo $firstname ?></label>
            </div>
            <div class="form-group">
              <label for="lastname"><i class=""></i> Last Name: <?php echo $lastname ?></label>
            </div>
            <div class="form-group">
              <label for="email"><i class=""></i> Email: <?php echo $email ?></label>
            </div>
            <div class="form-group">
              <label for="address"><i class=""></i> Address: <?php echo $address ?></label>
            </div>
            <div class="form-group">
              <label for="city"><i class=""></i> City: <?php echo $city ?></label>
            </div>
            <div class="form-group">
              <label for="state">State: <?php echo $state ?></label>
            </div>
            <div class="form-group">
              <label for="zip">Zip: <?php echo $zip ?></label>
            </div>
            <div class="form-group">
              <label for="country">Country: <?php echo $country ?></label>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>
</html>