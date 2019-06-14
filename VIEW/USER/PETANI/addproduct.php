<!DOCTYPE >

<html>
  <head>
    <meta charset="utf-8">
    <title>Add product</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/add.css">
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
            <a href="index_petani.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="addproduct.php">add product</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <br><br><br><br><br>

<div class="tubuh">
  <form action="addproduct.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Insert New Product Here</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
					
		
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Stock:</b></td>
				<td><input type="text" name="product_stok" required/></td>
			</tr>

			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>



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

