<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Change_pass</title>
    <link rel="stylesheet" href="styles/main.css">
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
    <div class="menu">
	<a href="indexpembeli.php">Home</a>
	<i class="fas fa-home"></i>
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
				<a href="my_orders.php">My Orders</a>
				<a href="edit_account.php">Edit Account</a>
				<a href="change_pass.php">Change Password</a>
				<a href="delete_account.php">Delete Account</a>
        </div>
	</div>
	<div class="tubuh">
	<h2 style="text-align:center;">Change Your Password</h2>
<form action="" method="post"> 
	
	<table align="center" width="600">
	<tr>
	<td align="right"><b>Enter Current Password:</b></td>
	<td><input type="password" name="current_pass" required></td>
	</tr>
	
	<tr>
	<td align="right"><b>Enter New Password:</b></td>
	<td><input type="password" name="new_pass" required></td>
	</tr>
	
	<tr>
	<td align="right"><b>Enter New Password Again:</b></td>
	<td><input type="password" name="new_pass_again" required></td>
	</tr>
	
	<tr align="center">
	<td colspan="3"><input type="submit" name="change_pass" value="Change Password"/></td>
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
