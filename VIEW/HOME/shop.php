<!DOCTYPE html>

<head>
  <title>Electronix Store</title>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
      <input onkeyup="filter()" class="search-txt" type="text" id="value" placeholder="Type to search" />
      <a class="search-btn" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>
    <div class="menu">
      <a href="../USER/login.php">Login</a>
      <i class="fas fa-user"></i>
      <a href="../USER/register.php">Register</a>
      <i class="fas fa-clipboard-list"></i>
    </div>
  </div>
  <div class="navbar">
    <div class="dropdown">
      <i class="fas fa-bars"></i>
      <button class="dropbtn">Categories</button>
      <div class="dropdown-content">
        <a href="#">Buah buahan</a>
        <a href="#">Kacang kacangan</a>
        <a href="#">Sayur sayuran</a>
      </div>
    </div>
    <a class="btn">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <div class="menu">
      <a href="index.html">Home</a>
      <a href="shop.html">Shop</a>
      <a href="cart.html">Cart</a>
      <a href="contact.html">Contact</a>
    </div>
  </div>
  <br><br>
  <div class="agenda">
    <h2>ALL PRODUCT</h2>
    <section>
      <article class="tes">
        <img src="images/jagung.jpg" alt="alpha"><br>
        <span class="name">Jagung Muda</span><br>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/bawangm.jpg" alt="alpha">
        <p>Bawang Merah</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/bawangp.jpg" alt="alpha">
        <p>Bawang Putih</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/bayam.jpg" alt="alpha">
        <p>Bayam</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/apel.jpg" alt="alpha">
        <p>apel</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/kacangkoro.jpg" alt="alpha">
        <p>kacang Koro</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/jagung.jpg" alt="alpha">
        <p>Jagung muda baru panen</p>
        <button class="button"><span>Detail</span></button>
      </article>
      <article class="tes">
        <img src="images/jagung.jpg" alt="alpha">
        <p>Jagung muda baru panen</p>
        <button class="button"><span>Detail</span></button>
      </article>
    </section>

    <script type="text/javascript">
      function filter() {

        var value, name, tes, i;

        value = document.getElementById("value").value.toUpperCase();
        tes = document.getElementsByClassName("tes");

        for (i = 0; i < tes.length; i++) {
          name = tes[i].getElementsByClassName("name");
          if (name[0].innerHTML.toUpperCase().indexOf(value) > -1) {
            tes[i].style.display = "flex";
          } else {
            tes[i].style.display = "none";
          }
        }

      }
    </script>
  </div>
</body>

</html>