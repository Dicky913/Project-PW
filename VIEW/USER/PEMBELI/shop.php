<!DOCTYPE html >
<head>
<title>Petani Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" href="css/main.css">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<style type="text/css">

.sub-barang{
background-color: yellow;
text-align:center;
padding:24px;
width:210px;
float:left;
border:3px  ;
 -moz-border-radius:14px;
 -khtml-border-radius: 14px;
 -webkit-border-radius: 14px;
 margin:5px 5px 10px 5px;
}
.jdl-brg{
font-size:16px;
height:200px;
margin-bottom:70px;
font-family:"Comic Sans MS";
}

</style>

<style type="text/css">
img {
padding:5px;
background-color:000066;
border-radius:20px;
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
          <input onkeyup="filter()" class="search-txt" type="text" id="value" placeholder="Type to search"/>
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
                    <a href="index.html">Home</a>
                    <a href="shop.html">Shop</a>
                    <a href="cart.html">Cart</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
<br><br>

<div class="tubuh">
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='#' >Detail</a></div>
    </div>
</div> 
<div class="tubuh">
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
                <img border=2 src='../ngadimin/produk/foto/$r[gambar]' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='#' >Detail</a></div>
    </div>
</div> 
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='detail.php?id=$r[id_produk]&filenya=$r[gambar]' >Detail</a></div>
    </div>
</div>  
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='#' >Detail</a></div>
    </div>
</div> 
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='#' >Detail</a></div>
    </div>
</div> 
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='detail.php?id=$r[id_produk]&filenya=$r[gambar]' >Detail</a></div>
    </div>
</div> 
<div class='sub-barang'>
        <div class='jdl-brg'>
        <a>Jerook</a>
            <div class='jdl-brg'>
       
                <img border=2 src='images/apel.jpg' border=0 width=200 height=200> 
                <a>Rp. 90000</a>
  <strong></strong>
      
        <br><a href='detail.php?id=$r[id_produk]&filenya=$r[gambar]' >Detail</a></div>
    </div>
</div> 


</div>
<div class="footer" align="center">
  <table width=100%>
     <tr>
      
				<td align="center">
                    <p id="lol" font  ></p>
                    <script >
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
  
      var value,name,tes,i;
  
      value = document.getElementById("value").value.toUpperCase();
      tes = document.getElementsByClassName("tes");
  
      for(i=0;i<tes.length;i++){
        name = tes[i].getElementsByClassName("name");
        if (name[0].innerHTML.toUpperCase().indexOf(value) > -1) {
          tes[i].style.display = "flex";
        }else{
         tes[i].style.display = "none";
        }
      }
  
    }
  </script>
</div>
</body>
</html>
