<?php
include '../../../CONTROLLER/action_petani.php';
session_start();

//jika belum login, maka session["login] belum terbentuk dan tidak boleh masuk ke index
if (!isset($_SESSION["login"])) {
  header("Location: login_petani.php");
  exit;
}

//untuk ubah data pake dibawah ini
//ambil data di URL
$id = $_SESSION['id'];
//query data mahasiswa berdasarkan idnya
$data = thisquery("SELECT * FROM petani WHERE id_petani = $id")[0];;

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  //jika di var_dump() mysqli_affected_rows hanya meng-outpukan kan 1 jika ada baris yg berubah(berhasil) dan -1 jika gagal
  if (ubahpassword($_POST) > 0) {

    //karena difunction yg menjadi returnnya adalah mysqli_affected_rows maka disini hanya di cek saja nilainya berapa
    echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'my_account.php';
            </script>
        ";
  } else {
    echo "
            <script>
                alert('Gagal');
                document.location.href = 'change_pass.php';
            </script>
        ";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Change_pass</title>
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
    <div class="menu">
      <a href="indexpetani.php">Home</a>
      <i class="fas fa-home"></i>
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
      <a href="profile.php">Profil</a>
      <a href="my_store.php">My Store</a>
      <a href="edit_account.php">Edit Account</a>
      <a href="change_pass.php">Change Password</a>
      <a href="delete_account.php">Delete Account</a>
    </div>
  </div>
  <div class="tubuh">
    <h2 style="text-align:center;">Change Your Password</h2>
    <form action="" method="post">

      <table align="center" width="600">
        <tr>
          <input type="hidden" name="id" value="<?php echo $data["id_petani"] ?>">
        </tr>

        <tr>
          <td align="right"><b>Enter Current Password:</b></td>
          <td><input type="password" name="password" required></td>
          <td><input type="hidden" name="password_confirm" value="<?php echo $data["password"] ?>"></td>
        </tr>

        <tr>
          <td align="right"><b>Enter New Password:</b></td>
          <td><input type="password" name="passwordbaru" required></td>
        </tr>

        <tr>
          <td align="right"><b>Enter New Password Again:</b></td>
          <td><input type="password" name="passwordbaru_confirm" required></td>
        </tr>

        <tr align="center">
          <td colspan="3"><input type="submit" name="submit" value="Change Password" /></td>
        </tr>

      </table>


    </form>

  </div>
  <div class="footer" align="center">
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