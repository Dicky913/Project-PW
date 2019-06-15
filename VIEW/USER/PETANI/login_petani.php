<?php
include '../../../CONTROLLER/action_petani.php';

session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM petani WHERE email= '$email'");

    //cek username
    //mysqli_num_rows() adalah fungsi yg menghitung berapa baris yang dikembalikan
    if (mysqli_num_rows($result) === 1) {

        //cek passwordnya
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id_petani'];
        if ($password === $row['password']) {

            $_SESSION["login"] = true;

            header("Location: indexpetani.php");
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
    <form action="" method="post">
        <div class="box">
            <div class="login-box">
                <h1>Login petani</h1>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="email">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <?php if (isset($error)) : ?>
                    <p style="color:red;">Password atau Username salah</p>
                <?php endif ?>

                <input type="submit" class="btn" value="Sign in" name="login">
            </div>
        </div>
    </form>
</body>

</html>