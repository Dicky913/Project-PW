<?php
session_start();
$id_barang = $_GET['id'];
unset($_SESSION["keranjang"][$id_barang]);
header('Location: cart.php');
