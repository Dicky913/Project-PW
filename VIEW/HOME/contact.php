<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTACT</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/alert.css">
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
            <input  class="search-txt" type="text" name="" placeholder="Type to search"/>
            <a class="search-btn" href="#">
             <i class="fas fa-search"></i>
            </a>
           </div>
              <div class="menu">
                  <a href="login.html">Login</a>
                  <i class="fas fa-user"></i>
                  <a href="register.html">Register</a>
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
          <br><br><br><br><br>


<form class="box">
<h1 >contact us</h1>
<input type="text" name="" placeholder="username">
<input type="email" name="" placeholder="email">
<input type="number" name="" placeholder="phone number">
<input type="texti" name="" placeholder="Comment">
<button onclick="pop()">Send</button>
</form>
  
<div id="boxx">
  <span ><ion-icon name="checkmark "></ion-icon></span>
  <h1>Berhasil Terkirim!</h1>

  <a onclick="pop()"  class="close">Close</a>
</div>
<script type="text/javascript">
var c=0;
function pop(){
  if(c=0){
    document.getElementbyId("boxx").style.display="block";
    c=1;
  }else{
    document.getElementbyId("boxx").style.display="none";
    c=0;
  }
}
</script>
  </body>
</html>