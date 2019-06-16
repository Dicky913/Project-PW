<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
	.tubuh{
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
  <input  class="search-txt" type="text" name="" placeholder="Type to search"/>
  <a class="search-btn" href="#">
   <i class="fas fa-search"></i>
  </a>
 </div>
    <div class="menu">
        
        <a href="my_account.php">My Account</a>
        <i class="fas fa-user"></i>
	    <a href="logout.php">Logout</a>
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
    <h2>SHOPPING CART</h2>
    <form action="" method="post" enctype="multipart/form-data">
			
            <table align="center" width="700" bgcolor="skyblue">
                
                <tr align="center">
                    <th>Remove</th>
                    <th>Product(S)</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                
   
                
                <tr align="center">
                    <td><input type="checkbox" name="remove[]" value=""/></td>
                    <td>Buuras<br>
                    <img src="admin_area/product_images/" width="60" height="60"/>
                    </td>
                    <td><input type="text" size="4" name="qty" value=""/></td>

                    
                    
                    <td>10.0000</td>
                </tr>
    
            
            <tr>
                    <td colspan="4" align="right"><b>Sub Total:</b></td>
                    <td>20000</td>
                </tr>
                
                <tr align="center">
                    <td><input type="submit" name="continue" value="Continue Shopping" /></td>
                    <td><button><a href="checkout.php" style="text-decoration:none; color:black; float:right;">Checkout</a></button></td>
                </tr>
                
            </table> 
        
        </form>

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
</body>
</html>
