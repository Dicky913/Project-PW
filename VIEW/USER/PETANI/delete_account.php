<?php
include '../../../CONTROLLER/action_petani.php';
session_start();

//jika belum login, maka session["login] belum terbentuk dan tidak boleh masuk ke index
if (!isset($_SESSION["login"])) {
  header("Location: login_petani.php");
  exit;
}
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Delete_account</title>
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
    <br>

    <h2 style="text-align:center; ">Do you really want to DELETE your account?</h2>
    <center>
      <form action="" method="post">

        <br>
        <a href="../../../CONTROLLER/petani_hapuspetani.php?id=<?php echo $id ?>" onclick="return confirm('Apakah Yakin Akan Menghapus Data ini?')">HAPUS</a>

      </form>
    </center>

  </div>
  <div class=" footer" align="center">
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