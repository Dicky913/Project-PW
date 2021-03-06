<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "petanidb");

function thisquery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    //siapkan array kosong penampung data yang akan diimport dari db
    $rows  = [];
    while ($row = mysqli_fetch_assoc($result)) {
        //ini maksudnya agar setiap data yang diambil ke dn oleh $row akan disimpan dalam array $rows
        $rows[] = $row;
    }
    return $rows;
}

function hapusbarang($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM barang WHERE kd_barang = $id");

    return mysqli_affected_rows($conn);
}

function hapuspetani($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM petani WHERE id_petani = $id");

    return mysqli_affected_rows($conn);
}

function hapuspembeli($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}

function konfirmasi($id)
{
    global $conn;

    mysqli_query($conn, "UPDATE pembelian_produk SET konfirmasi ='Sudah ' WHERE id_pembelian_produk = $id");

    return mysqli_affected_rows($conn);
}
