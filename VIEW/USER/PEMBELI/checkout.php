<?php
include '../../../CONTROLLER/action_pembeli.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login_pembeli.php");
    exit;
}
$koneksi = new mysqli("localhost", "root", "", "petanidb");
?>
<!DOCTYPE html>
<title>Checkout Page</title>

<head>
    <meta charset="utf-8">
    <title>Checkout</title>
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
            <a href="indexpembeli.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="cart.php">Cart</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <div class="tubuh">
        <h2>CHECKOUT</h2>
        <form action="" method="post">
            <table align="center" width="700" bgcolor="skyblue">

                <tr align="center">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub Harga</th>
                </tr>

                <?php $i = 1 ?>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) : ?>
                    <!-- kalo yang => biasa utk array, yaitu bagian "key" & "value". -->
                    <?php
                    $select_query = "SELECT * FROM barang WHERE kd_barang = $id_barang";
                    $sql = mysqli_query($conn, $select_query);
                    ?>
                    <?php while ($data = mysqli_fetch_array($sql)) { ?>
                        <?php $subharga = $data['harga'] * $jumlah ?>
                        <tr align="center">
                            <td><?php echo $i ?></td>
                            <td><?php echo $data['Nm_barang'] ?></td>
                            <td><?php echo $jumlah ?></td>
                            <td>Rp. <?php echo number_format($data['harga']) ?></td>
                            <td>Rp. <?php echo number_format($subharga)  ?></td>
                        </tr>
                        <?php $i += 1; ?>
                    <?php } ?>
                    <?php $total += $subharga ?>
                <?php endforeach ?>
                <tr align="center">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>TOTAL</td>
                    <td>Rp. <?php echo number_format($total) ?></td>
                </tr>
            </table>
            <center>
                <input type="submit" name="beli" value="Beli"">
            </center>
        </form>
        <?php
        if (isset($_POST['beli'])) {
            $id_pembeli = $_SESSION['id'];
            $tanggal_pembelian = date("Y-m-d");

            //1.menyimpan data ke tabel pembelian
            $koneksi->query("INSERT INTO pembelian (id_pembeli, tanggal, total_pembelian) VALUES ('$id_pembeli', '$tanggal_pembelian', '$total')");

            //mendapat id_pembelian barusan terjadi
            $rand = uniqid();
            $id_pembelian_barusan = $koneksi->insert_id; //dapetin id pembelian pas di klik
            foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) {
                $koneksi->query("INSERT INTO pembelian_produk (id_pembelian, kd_barang, jumlah, no_transaksi, konfirmasi) VALUES ('$id_pembelian_barusan', '$id_barang', '$jumlah', '$rand', 'Belum')");
            }
            //mengkosongkan keranjang belanja setelah dibeli
            unset($_SESSION['keranjang']);
            //direct ke my_orders
            echo "<script>alert('Pembelian Sukses!');</script>";
        }
        ?>
    </div>
    <div class=" footer" align="center">
                <table width=100%>
                    <tr>

                        <td align="center">
                            <p id="lol" font></p>
                            <script>
                                function Person(first) {
                                    this.firstName = first;
                                }
                                var orang1 = new Person("KAK EKA");
                                var orang2 = new Person("DICKY");
                                var orang3 = new Person("OPHAL");

                                document.getElementById("lol").innerHTML =
                                    "Copyright &copy; 2014 " + orang1.firstName + " " + orang2.firstName + " And " + orang3.firstName;
                            </script>
                        </td>

                    </tr>
                </table>

    </div>
</body>

</html>