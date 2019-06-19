<?php
include '../../../CONTROLLER/action_pembeli.php';
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login_pembeli.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>My_order</title>
  <link rel="stylesheet" href="../../CSS/main.css">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <style>
    .tubuh {
      width: 100%;
      height: 400px;
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
      <a href="indexpembeli.php">Home</a>
      <i class="fas fa-home"></i>
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
      <a href="profile.php">Profile</a>
      <a href="my_orders.php">My Orders</a>
      <a href="edit_account.php">Edit Account</a>
      <a href="change_pass.php">Change Password</a>
      <a href="delete_account.php">Delete Account</a>
    </div>
  </div>
  <div class="tubuh">
    <table width="795" align="center" bgcolor="yellow">

      <tr align="center">
        <td colspan="6">
          <h2>Your Orders details:</h2>
        </td>
      </tr>

      <tr align="center" bgcolor="skyblue">
        <th>No</th>
        <th>Nama Produk</th>
        <th>Invoice No</th>
        <th>Status</th>
      </tr>

      <?php $id_pembeli = $_SESSION['id'];

      $query = ("SELECT no_transaksi, konfirmasi, Nm_barang FROM pembelian_produk INNER JOIN barang ON pembelian_produk.kd_barang_2 = barang.kd_barang WHERE pembelian_produk.id_pembeli_2 = $id_pembeli");

      $sql = mysqli_query($conn, $query);

      $i = 1; ?>

      <?php while ($data = mysqli_fetch_array($sql)) { ?>

        <tr align=" center ">
          <td><?php echo $i ?></td>
          <td><?php echo $data['Nm_barang'] ?></td>
          <td><?php echo $data['no_transaksi'] ?></td>
          <td><?php echo $data['konfirmasi'] ?></td>
        </tr>
        </section>
        <?php $i += 1; ?>
      <?php } ?>
    </table>

  </div>
  <div class=" footer " align=" center ">
    <table width=100%>
      <tr>

        <td align=" center ">
          <p id=" lol " font></p>
          <script>
            function Person(first) {
              this.firstName = first;
            }
            var orang1 = new Pers on(" KAK EK A");
            var orang2 = new Person("DICK Y");
            var orang3 = new Person("OPHA L");

            document.g etE lementById("lo l").innerHTML =

              "Copyright  &copy;
            2014 " + orang1.firstName + "
            " + orang2.firstName + "
            and " + orang3.firstName;
          </script>
        </td>

      </tr>
    </table>

  </div>
</body>

</html>