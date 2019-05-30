<?php
include '../function.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$data = thisquery("SELECT * FROM petani");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
</head>

<body>
    <a href="logout.php">Logout!</a>
    <h1 align="center">ALL USER PETANI</h1>

    <br>
    <p align="center"><a href="tambah.php">Tambah Data</a></p>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>AKsi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Hadphone</th>

                <!-- mulai perulangan untu data -->
                <?php $i = 1; ?>
                <?php foreach ($data as $dt) : ?>
                </tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $dt["id"] ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $dt["id"] ?>" onclick="return confirm('Apakah Yakin Akan Menghapus Data ini?')">Hapus</a>
                </td>
                <td><?php echo $dt["nama"] ?></td>
                <td><?php echo $dt["alamat"] ?></td>
                <td><?php echo $dt["email"] ?></td>
                <td><?php echo $dt["no_hp"] ?></td>

                <tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

        </table>
    </center>

    <br>
    <br>

    <?php

    $data = thisquery("SELECT * FROM pembeli");

    ?>
    <h1 align="center">ALL USER PEMBELI</h1>

    <br>
    <p align="center"><a href="tambah.php">Tambah Data</a></p>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>AKsi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Hadphone</th>

                <!-- mulai perulangan untu data -->
                <?php $i = 1; ?>
                <?php foreach ($data as $dt) : ?>
                </tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $dt["id"] ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $dt["id"] ?>" onclick="return confirm('Apakah Yakin Akan Menghapus Data ini?')">Hapus</a>
                </td>
                <td><?php echo $dt["nama"] ?></td>
                <td><?php echo $dt["alamat"] ?></td>
                <td><?php echo $dt["email"] ?></td>
                <td><?php echo $dt["no_hp"] ?></td>

                <tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
        </table>
    </center>


</body>

</html>