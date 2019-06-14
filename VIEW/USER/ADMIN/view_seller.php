<?php
include '../../../CONTROLLER/action_admin.php';
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login_admin.php");
  exit;
}
$data = thisquery("SELECT * FROM petani");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Index_ADMIN</title>
  <link rel="stylesheet" href="../../CSS/main.css">
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
    <div class="menu">

      <a href="logout.php">Admin Logout</a>
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
      <a href="insert_cat.php">Insert New Category</a>
      <a href="view_cats.php">View All Categories</a>
      <a href="view_seller.php">View All Seller</a>
      <a href="view_customers.php">View Customers</a>
      <a href="view_orders.php">View Orders</a>
    </div>
  </div>


  <table width="795" align="center" bgcolor="yellow">


    <tr align="center">
      <td colspan="6">
        <h2>View All Seller Here</h2>
      </td>
    </tr>

    <tr align="center" bgcolor="skyblue">
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Image</th>
      <th>Alamat</th>
      <th>Nomor Hp</th>
      <th>Aksi</th>
    </tr>
    <tr align="center">
      <?php $i = 1; ?>
      <?php foreach ($data as $dt) : ?>
      </tr>
      <td><?php echo $i ?></td>
      <td><?php echo $dt["nama"] ?></td>
      <td><?php echo $dt["email"] ?></td>
      <td>Belum ada</td>
      <td><?php echo $dt["alamat"] ?></td>
      <td><?php echo $dt["no_hp"] ?></td>
      <td>
        <center>
          <a href="#">Hapus</a>
        </center>
      </td>
      <tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tr>





  </table>
  </div>
</body>

</html>