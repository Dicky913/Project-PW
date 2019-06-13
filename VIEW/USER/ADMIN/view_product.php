<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Index_ADMIN</title>
  <link rel="stylesheet" href="../../CSS/main.css">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <style>
    .container {
      position: relative;
    }

    img {
      width: 100%;
      height: 50%;
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

      <a href="logout.php">Admin Logout</a>
    </div>
  </div>
  <div class="navbar">

    <a class="btn">
      <span></span>
      <span></span>
      <span></span>
    </a>

    <div class="menu">
      <a href="view_product.php">View All Products</a>
      <a href="insert_cat.php">Insert New Category</a>
      <a href="view_cats.php">View All Categories</a>
      <a href="view_seller.php">View All Seller</a>
      <a href="view_customers.php">View Customers</a>
      <a href="view_orders.php">View Orders</a>
    </div>
  </div>
  <table width="795" align="center" bgcolor="yellow">


    <tr align="center">
      <td colspan="6">
        <h2>View All Products Here</h2>
      </td>
    </tr>

    <tr align="center" bgcolor="skyblue">
      <th>S.N</th>
      <th>Title</th>
      <th>Image</th>
      <th>Price</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    <tr align="center">
      <td>1</td>
      <td>Apel</td>
      <td><img src="#" width="60" height="60" /></td>
      <td>20.000</td>
      <td><a href="#">Edit</a></td>
      <td><a href="#">Delete</a></td>

    </tr>
  </table>
  </div>
</body>

</html>