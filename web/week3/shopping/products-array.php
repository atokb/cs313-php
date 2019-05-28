<?php

$items = array("King's Plaid(By Polo Raplh Laurent)", "King's Custom(By The Mountain)", "King's Express(By Tee Shirt Palace)", "King's Flex(By Automotive Workwear)", "King's Simple(By Warasale)", "King's Ultimate(By Peter Millar)", "King's Royal(By Tide Buy)", "King's Special(By Ericdress)");
$images = array('polo_ralph_laurent.jpg', 'mountain_sand_immortal', 'express.jpg', 'flex.jpg', 'simple.jpg','ultimate.jpg', 'royal.jpg', 'special.jpg');
$price = array("22.50", "30.15", "30.00", "20.00", "24.99", "45.00", "49.99", "59.99");

//Load Session
if (!isset($_SESSION["total"]) ) {
  $_SESSION["total"] = 0;
  for ($i=0; $i< count($items); $i++) {
    $_SESSION["images"][$i] = 0;
    $_SESSION["qty"][$i] = 0;    
    $_SESSION["price"][$i] = 0;
  }
}

//Reset
if ( isset($_GET['reset']) )
{
if ($_GET["reset"] == 'true')
  {
  unset($_SESSION["qty"]);
  unset($_SESSION["images"]);
  unset($_SESSION["price"]);
  unset($_SESSION["total"]);
  unset($_SESSION["cart"]);
  }
}

//Add
if ( isset($_GET["add"]) )
{
$i = $_GET["add"];
$qty = $_SESSION["qty"][$i] + 1;
$_SESSION["price"][$i] = $price[$i] * $qty;
$_SESSION["cart"][$i] = $i;
$_SESSION["qty"][$i] = $qty;
}

//Delete
if ( isset($_GET["delete"]) )
{
$i = $_GET["delete"];
$qty = $_SESSION["qty"][$i];
$qty--;
$_SESSION["qty"][$i] = $qty;
if ($qty == 0) {
 $_SESSION["price"][$i] = 0;
 unset($_SESSION["cart"][$i]);
}
else
{
$_SESSION["price"][$i] = $price[$i] * $qty;
}
}

?>