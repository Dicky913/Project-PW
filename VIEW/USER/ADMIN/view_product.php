<?php
include '../../../CONTROLLER/action_admin.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login_admin.php");
  exit;
}
$data = thisquery("SELECT * FROM barang");
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
      width: 40%;
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
  <table width="795" align="center" bgcolor="yellow">
    <tr align="center">
      <td colspan="6">
        <h2>View All Products Here</h2>
      </td>
    </tr>
    <tr align="center" bgcolor="skyblue">
      <th>No</th>
      <th>Nama</th>
      <th>Image</th>
      <th>Price</th>
      <th>Stok</th>
      <th>Deskripsi</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($data as $dt) : ?>
      </tr>
      <td><?php echo $i ?></td>
      <td><?php echo $dt["Nm_barang"] ?></td>
      <td><img src="../../IMAGE/images_petani/<?php echo $dt["gambar"] ?>" class="tes"></td>
      <td><?php echo $dt["harga"] ?></td>
      <td><?php echo $dt["stok"] ?></td>
      <td><?php echo $dt["deskripsi"] ?></td>
      <tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tr>
  </table>
  </div>
</body>

</html>