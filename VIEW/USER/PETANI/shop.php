<!DOCTYPE html>

<head>
    <title>Petani Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" href="../../CSS/main.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style type="text/css">
        .tubuh {
      width: 100%;
      height: 800px;
    }
    .agenda, .artikel{
    margin-bottom: 40px;
    width: 100%;
    margin-left: 500px;
}
.tes{
    float: left;
    border: 2px solid #f1f1f1;
    border-radius: 5%;
    padding: 10px;
    text-align: center;
    width: 270px;
    background-color: aqua;
    height: 250px;
    margin-right: 30px;
    margin-bottom: 45px;
    margin-left: 10px;
}

.tes img{
    width: 50%;
}
.tes p{
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
            <input onkeyup="filter()" class="search-txt" type="text" id="value" placeholder="Type to search" />
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
            <a href="indexpetani.php">Home</a>
            <a href="addproduct.php">Add Product</a>
            <a href="shop.php">Shop</a>
            <a href="cart.php">Cart</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <br><br>

    <div class="tubuh">

    <center><h2>- ALL PRODUCT -</h2></center>
    <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
          </article>
      </section>

      <section>
          <article class="tes">
              <img src="images/jagung.jpg" alt="alpha"><br>
             <h3>Jagung Muda</h3>
              <span class="name" style='background-color: white'><b>Rp.23000</b></span><br>
              <button class="button"><span>Detail</span></button>
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