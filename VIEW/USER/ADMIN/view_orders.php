<?php
include '../../../CONTROLLER/action_admin.php';
session_start();

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
        <h2>View all orders here</h2>
      </td>
    </tr>

    <tr align="center" bgcolor="skyblue">
      <th>No</th>
      <th>Nama Produk</th>
      <th>Invoice No</th>
      <th>Update Status</th>
    </tr>

    <?php
    $query = ("SELECT no_transaksi, konfirmasi, Nm_barang FROM pembelian_produk INNER JOIN barang ON pembelian_produk.kd_barang_2 = barang.kd_barang WHERE pembelian_produk.konfirmasi = 'belum'");
    $sql = mysqli_query($conn, $query);
    $i = 1; ?>
    <?php while ($data = mysqli_fetch_array($sql)) { ?>

      <tr align=" center ">
        <td><?php echo $i ?></td>
        <td><?php echo $data['Nm_barang'] ?></td>
        <td><?php echo $data['no_transaksi'] ?></td>
        <td><a href="">Konfirmasi Pembayaran</a></td>
      </tr>
      </section>
      <?php $i += 1; ?>
    <?php } ?>
  </table>
  </div>
</body>

</html>