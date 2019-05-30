<?php
include '../function.php';

session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email= '$email'");

    //cek username
    //mysqli_num_rows() adalah fungsi yg menghitung berapa baris yang dikembalikan
    if (mysqli_num_rows($result) === 1) {

        //cek passwordnya
        $row = mysqli_fetch_assoc($result);
        if ($password === $row['password']) {

            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </ul>
    </form>
    <?php if (isset($error)) : ?>
        <p style="color:red;">Password atau Username salah</p>
    <?php endif ?>

</body>

</html>