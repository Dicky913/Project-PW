<?php
include '../../../CONTROLLER/action_petani.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login_pembeli.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CONTACT</title>
  <link rel="stylesheet" href="../../CSS/main.css">
  <link rel="stylesheet" href="../../CSS/contact.css">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
  <div class="subnavbar">
    <div class="logo">

    </div>
    <a class="btn">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <div class="search-box">
      <input class="search-txt" type="text" name="" placeholder="Type to search" />
      <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>
    <div class="menu">
      <a href="my_account.php">My Account</a>
      <i class="fas fa-user"></i>
      <a href="../../../CONTROLLER/logout.php">Logout</a>
      <i class="fas fa-sign-in-alt"></i>
    </div>
  </div>
  <div class="navbar">

    <a class="btn">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <div class="menu">
      <a href="index.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="cart.php">Cart</a>
      <a href="contact.php">Contact</a>
    </div>
  </div>
  <br><br><br><br><br>


  <form class="box">
    <h1>contact us</h1>
    <input type="text" name="" placeholder="username">
    <input type="email" name="" placeholder="email">
    <input type="number" name="" placeholder="phone number">
    <input type="texti" name="" placeholder="Comment">
    <button ">Send</button>
</form>
  
  </body>
</html>