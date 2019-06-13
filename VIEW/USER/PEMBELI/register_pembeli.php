<?php
include '../../../CONTROLLER/action_pembeli.php';
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
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../CSS/mainuser.css">
</head>

<body>
    <div class="box">
        <div class="login-box">
            <h1>Registrasi Pembeli</h1>
            <form action="" method="post">
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama" name="nama">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Konfirmasi Password" name="password2">
                </div>

                <div class="textbox">
                    <i class="fas fa-map"></i>
                    <input type="text" placeholder="Alamat" name="alamat">
                </div>

                <div class="textbox">
                    <i class="fas fa-phone-square"></i>
                    <input type="text" placeholder="Nomor Handphone" name="no_hp">
                </div>

                <div class="textbox">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email">
                </div>

                <input type="submit" class="btn" value="Register" name="register">
        </div>
    </div>
    </form>

</body>

</html>