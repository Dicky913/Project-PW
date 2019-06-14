<?php
include '../../../CONTROLLER/action_admin.php';
session_start();
//jadi gabisa masuk kalo ga login

if (!isset($_SESSION["login"])) {
    header("Location: login_admin.php");
    exit;
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index_ADMIN</title>
    <link rel="stylesheet" href="../../CSS/main.css">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .container {
            position: relative;
        }

        img {
            width: 100%;
            height: 50%;
        }
    </style>
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
        <div class="menu">

            <a href="../../../CONTROLLER/logout.php">Admin Logout</a>
        </div>
    </div>
    <div class="navbar">

        <a class="btn">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="menu">
            <a href="view_product.php">View All Products</a>
            <a href="view_seller.php">View All Seller</a>
            <a href="view_customers.php">View Customers</a>
            <a href="view_orders.php">View Orders</a>
        </div>
    </div>
    <div class="container">
        <!-- <img src="../../IMAGE/bg-body.gif" alt="Cinque Terre" width="100" height="30"> -->
    </div>
    </div>
</body>

</html>