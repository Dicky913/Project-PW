    <?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "petanidb");

    function register($data)
    {
        global $conn;

        $nama = $data["nama"];
        //mysqli_real_escape_string adalah memungkinkan user dapat membuat password menggunakan tanda " (petik)
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $alamat = $data["alamat"];
        $no_hp = $data["no_hp"];
        $email = $data["email"];

        //cek username sudah ada atau belum
        $cek = mysqli_query($conn, "SELECT email FROM petani WHERE email = '$email'");

        if (mysqli_fetch_assoc($cek)) {
            echo "<script>
                    alert('Username Telah Tersedia');
              </script>";
            return false;
        }

        //cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
                    alert('Password Tidak Sesuai');
              </script>";

            return false;
        }

        //tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO petani VALUES ('', '$nama', '$password', '$alamat', '$no_hp', '$email')");
        return mysqli_affected_rows($conn);
    }

    function thisquery($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        //siapkan array kosong penampung data yang akan diimport dari db
        $rows  = [];
        while ($row = mysqli_fetch_assoc($result)) {
            //ini maksudnya agar setiap data yang diambil ke dn oleh $row akan disimpan dalam array $rows
            $rows[] = $row;
        }
        return $rows;
    }
