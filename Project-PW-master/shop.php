<!DOCTYPE html >
<head>
<title>Electronix Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="css/produk.css" />
<link rel="stylesheet" href="css/main.css">
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
          <input onkeyup="filter()" class="search-txt" type="text" id="value" placeholder="Type to search"/>
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
<br><br>

<?php 
	$get_pro = "select * from products";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
		echo "
		
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180' />
					
					<p><b> $ $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					
					<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
			
		
		";
	
	}
	?>

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
