<!DOCTYPE >
<?php 

include("this/db.php");

?>
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
            <a href="index_petani.html">Home</a>
            <a href="shop.html">Shop</a>
            <a href="addproduct.html">addproduct</a>
            <a href="contact.html">Contact</a>
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
				<td align="right"><b>Product Category:</b></td>
				<td>
				<select name="product_cat" >
					<option>Select a Category</option>
					<?php 
		$get_cats = "select * from categories";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
		echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
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
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_keywords" size="50" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$Nm_barang = $_POST['product_title'];
		$kategori= $_POST['product_cat'];
		$stok = $_POST['product_stok'];
		$harga = $_POST['product_price'];
		$deskripsi = $_POST['product_desc'];
		$keyword = $_POST['product_keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"images/$product_image");
	
		 $insert_product = "insert into barang (product_stok,product_price,product_title,product_cat,product_desc,product_keyword,product_image) values ('$stok','$harga','$Nm_barang','$kategori','$deskripsi','$keyword','$product_image')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Product Has been inserted!')</script>";
		 echo "<script>window.open('index.php?insert_product','_self')</script>";
		 
		 }
	}








?>

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

