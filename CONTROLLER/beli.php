<?php
session_start();

$id_barang = $_GET["kd_barang"];

//jika dikeranjang sudah ada produk yang dibeli, maka jumlahnya di +1
if (isset($_SESSION['keranjang'][$id_barang])) {
    $_SESSION['keranjang'][$id_barang] += 1;
} else {
    //selain itu (blm ada d kerajnjang, maka produk itu dibeli 1)
    $_SESSION['keranjang'][$id_barang] = 1;
}
//pindah ke halaman keranjang
// echo "<script>alert('product Telah masuk Keranjang');</script>";
header('Location: ../VIEW/USER/PEMBELI/cart.php');
