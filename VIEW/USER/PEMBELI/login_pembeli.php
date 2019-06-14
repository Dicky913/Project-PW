<?php
include '../../../CONTROLLER/action_pembeli.php';

session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pembeli WHERE email= '$email'");

    //cek username
    //mysqli_num_rows() adalah fungsi yg menghitung berapa baris yang dikembalikan
    if (mysqli_num_rows($result) === 1) {

        //cek passwordnya
        $row = mysqli_fetch_assoc($result);
        if ($password === $row['password']) {

            $_SESSION["login"] = true;

            header("Location: indexpembeli.php");
            exit;
        }
    }

    $error = true;
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
            <h1>Login Pembeli</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password">
            </div>

            <input type="button" class="btn" value="Sign in">
        </div>
    </div>
</body>

</html>