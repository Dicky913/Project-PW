<?php
include '../function.php';
//kasi kondisi jika tombol submit sudah ditekan
if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
                    alert('Anda telah Berhasil Registrasi');
                  </script>";
    }
} else {
    echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <h1>Halaman Registrasi</h1>
    <br>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="no_hp">Nomor handphone : </label>
                <input type="text" name="no_hp" id="no_hp">
            </li>
            <br>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>

</body>

</html>