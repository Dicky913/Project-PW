<?php
include '../../../CONTROLLER/action_pembeli.php';
session_start();
//jadi gabisa masuk kalo ga login

if (!isset($_SESSION["login"])) {
  header("Location: login_pembeli.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Index</title>
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
    <div class="search-box">
      <input class="search-txt" type="text" name="" placeholder="Type to search" />
      <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>
    <div class="menu">

      <a href="my_account.php?id=<?php echo $_SESSION['id'] ?>">My Account</a>
      <i class="fas fa-user"></i>
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
      <a href="indexpembeli.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="cart.php">Cart</a>
      <a href="contact.php">Contact</a>
    </div>
  </div>
  <div class="tubuh">
    <h2>Hi!!.........SELAMAT DATANG DI WEBSITE PAKTANI</h2>
    <div class="slider">
    </div>
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