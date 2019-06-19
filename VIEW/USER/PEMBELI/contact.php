<?php
include '../../../CONTROLLER/action_pembeli.php';
session_start();

//jika belum login, maka session["login] belum terbentuk dan tidak boleh masuk ke index
if (!isset($_SESSION["login"])) {
  header("Location: login_pembeli.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CONTACT</title>
  <link rel="stylesheet" href="../../CSS/main.css">
  <link rel="stylesheet" href="../../CSS/contact.css">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <style>
    .tubuh {
      width: 100%;
      height: 450px;
    }

    .agenda,
    .artikel {
      margin-bottom: 40px;
      width: 100%;
      margin-left: 500px;
    }

    .tes {
      float: left;
      border: 2px solid #f1f1f1;
      padding: 10px;
      text-align: center;
      width: 270px;
      background-color: white;
      height: 300px;
      margin-right: 30px;
      margin-bottom: 45px;
      margin-left: 110px;
    }

    .tes img {
      width: 50%;
      border: 2px solid black;
    }

    .tes p {
      height: 40px;
      /* padding: 10px; */
      text-align: left;
      margin: 0;
      margin-bottom: 30px;
    }

    .button {
      border-radius: 4px;
      background-color: #5cd65c;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 20px;
      padding: 5px;
      width: 120px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -10px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 15px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
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
      <a href="my_account.php">My Account</a>
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
  <br><br><br><br><br>
  <div class="tubuh">

    <center>
      <h2>- CONTACT US -</h2>
    </center>

    <section>
      <article class="tes">
        <img src="../../IMAGE/images_pembeli/5d05392de4c04.png" alt="alpha"><br>
        <h3>EKA PUTRI</h3>
        <h4>F1D016024</h4>
      </article>

      <article class="tes">
        <img src="../../IMAGE/images_pembeli/5d05392de4c04.png" alt="alpha"><br>
        <h3>MUHAMMAD NAUFAL RIZQULLAH</h3>
        <h4>F1D017062</h4>
      </article>

      <article class="tes">
        <img src="../../IMAGE/images_pembeli/5d05392de4c04.png" alt="alpha"><br>
        <h3>FERNANDA DICKY IVANSYAH</h3>
        <h4>F1D017020</h4>
      </article>
    </section>

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